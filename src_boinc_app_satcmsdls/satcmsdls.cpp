#include "boinc_api.h"

#include <ctime>
#include <fstream>
#include <string>
#include <sstream>
#include "minisat22_wrapper.h"

using namespace std;

#define CHECKPOINT_FILE "chpt"
#define INPUT_FILENAME  "in"
#define OUTPUT_FILENAME "out"

//const int MAX_NOF_RESTARTS = 100;
const int MAX_NOF_RESTARTS = 5000;

int cubes_processed = 0;
int cubes_num = 0;
double max_solving_time = -1.0;

bool do_work( string &input_path, stringstream &result_sstream );
int do_checkpoint( stringstream &result_sstream );

int main( int argc, char **argv ) {
    char buf[256];
    int retval = boinc_init();
    if ( retval ) {
	fprintf(stderr, "%s boinc_init returned %d\n",
	boinc_msg_prefix(buf, sizeof(buf)), retval
	);
	exit( retval );
    }

    string input_path, output_path, chpt_path;
    string str;
    ofstream outfile;
    fstream chpt_file;
	
    // open the input file (resolve logical name first)
    boinc_resolve_filename_s( INPUT_FILENAME, input_path );
	
    // See if there's a valid checkpoint file.
    stringstream result_sstream;
    boinc_resolve_filename_s( CHECKPOINT_FILE, chpt_path );
    chpt_file.open( chpt_path.c_str(), ios_base :: in );
    if ( chpt_file.is_open() ) {
	chpt_file >> cubes_processed >> cubes_num >> max_solving_time;
	while ( getline( chpt_file, str ) )
	    result_sstream << str;
	chpt_file.close();
    }
    
    if ( !do_work( input_path, result_sstream ) ) {
	fprintf( stderr, "%s APP: do_work() failed:\n" );
	perror("do_work");
    	exit(1);
    }

    // resolve, open and write answer to output file
    boinc_resolve_filename_s( OUTPUT_FILENAME, output_path );
    outfile.open( output_path.c_str() );
    if ( !outfile.is_open() ) {
	fprintf(stderr, "%s APP: app output open failed:\n",
        boinc_msg_prefix(buf, sizeof(buf))
    	);
	exit(-1);
    }
    outfile << cubes_processed << "/" << cubes_num << " processed" << endl;
    outfile << "max time " << max_solving_time << endl;
    outfile << result_sstream.str();
    outfile.close();
	
    boinc_finish(0);
}

bool do_work( string &input_path, stringstream &result_sstream )
{
    string cnf_name, str;
    ifstream ifile( input_path.c_str() );
    getline( ifile, cnf_name );
    fprintf( stderr, "cnf %s\n", cnf_name.c_str() );
    clock_t begin_clock = clock();

    vector<vector<int>> cubes;
    while ( getline( ifile, str ) ) {
	if ((str.size() > 2) && (str[0] == 'a') && (str[str.size()-1] == '0')) {
	    stringstream sstream;
	    vector<int> cube;
	    sstream << str.substr(1, str.size() - 2);
	    int tmp_i;
	    while (sstream >> tmp_i) {
		cube.push_back(tmp_i);
	    }
	    cubes.push_back(cube);
	}
    }
    ifile.close();
    fprintf(stderr, "%d cubes\n", cubes.size());
    cubes_num = cubes.size();

    minisat22_wrapper m22_wrapper;
    Problem cnf_problem;
    ifstream cnf_stream(cnf_name);
    m22_wrapper.parse_DIMACS_to_problem(cnf_stream, cnf_problem);
    cnf_stream.close();

    //for (int i=cubes_processed+1)
    
    for (int i=cubes_processed; i<cubes.size(); i++) {
	Solver *S = new Solver();
	S->addProblem( cnf_problem );
	S->max_nof_restarts = MAX_NOF_RESTARTS;

	for (int j=0; j<cubes[i].size(); j++) {
	    int var_ind = abs(cubes[i][j])-1;
	    Lit lit = cubes[i][j] > 0 ? mkLit(var_ind) : ~mkLit(var_ind);
	    S->addClause( lit );
	}
	clock_t begin_clock = clock();
	lbool ret = S->solve();
	clock_t end_clock = clock();
	double t = double(end_clock - begin_clock) / CLOCKS_PER_SEC;
	if ((max_solving_time == -1.0) || (t > max_solving_time))
	    max_solving_time = t;
	cubes_processed++;

	if ( ret == l_True ) {
	    if (!result_sstream.str().empty())
		result_sstream << '\n';
	    result_sstream << "SAT ";
	    for ( int i=0; i < S->model.size(); i++ )
		result_sstream << ( S->model[i] == l_True) ? '1' : '0'; 
	    result_sstream << endl << "cube index : " << i << endl;
	    result_sstream << "time : " << t << " sec" << endl;
	    cout << result_sstream.str();
	}
	
	cout << "cubes processed " << cubes_processed << " , time : " << t << " sec" << endl;
	do_checkpoint( result_sstream );
    }

    if (result_sstream.str().empty())
	result_sstream << "UNSAT";
    
    return true;
}

int do_checkpoint( stringstream &result_sstream )
{
    int retval;
    string resolved_name;
	
    ofstream temp_ofile( "temp" );
	if ( !temp_ofile.is_open() ) 
	    return 1;
    temp_ofile << cubes_processed << " " << cubes_num << " " << max_solving_time << endl;
    temp_ofile << result_sstream.str();
    temp_ofile.close();

    boinc_resolve_filename_s( CHECKPOINT_FILE, resolved_name );
    retval = boinc_rename( "temp", resolved_name.c_str() );
    if ( retval ) 
	return retval;

    boinc_fraction_done( ( double )cubes_processed / ( double )cubes_num );

    return 0;
}