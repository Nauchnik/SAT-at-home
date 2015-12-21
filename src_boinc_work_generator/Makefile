CPP = g++
BOOST = ../../
SRC_COMMON = ../../pdsat/src_common/
MINISAT = ../../pdsat/src_common/minisat/
MYSQL = /usr/include/mysql
UUID = /usr/include/uuid
INCDIRS  = -I${MYSQL} -I${BOOST} -I${UUID} -I${SRC_COMMON} -I${MINISAT}

CPP_DEBUG_FLAGS = -O0 -DDEBUG_ALL -g ${INCDIRS}
CPP_RELEASE_FLAGS = -O2 -D NDEBUG -D __STDC_LIMIT_MACROS -D __STDC_FORMAT_MACROS ${INCDIRS} -MYSQL -D _BOINC
MYSQL_LIBS = -luuid /usr/lib/libmysqlclient.so

#all: release debug

release: CPPFLAGS = $(CPP_RELEASE_FLAGS)
release: pdsat_work_generator

debug: CPPFLAGS = $(CPP_DEBUG_FLAGS)
debug: pdsat_work_generator

pdsat_work_generator: work_generator.o minisat22_wrapper.o latin_squares.o addit_func.o Solver.o System.o Options.o
	${CPP} ${CPPFLAGS} work_generator.o minisat22_wrapper.o latin_squares.o addit_func.o Solver.o System.o Options.o -o pdsat_work_generator $(MYSQL_LIBS)

Options.o: ../../pdsat/src_common/minisat/utils/Options.cc
	${CPP} ${CPPFLAGS} ../../pdsat/src_common/minisat/utils/Options.cc -c
	
System.o: ../../pdsat/src_common/minisat/utils/System.cc
	${CPP} ${CPPFLAGS} ../../pdsat/src_common/minisat/utils/System.cc -c

Solver.o: ../../pdsat/src_common/minisat/core/Solver.cc
	${CPP} ${CPPFLAGS} ../../pdsat/src_common/minisat/core/Solver.cc -c

minisat22_wrapper.o: ../../pdsat/src_common/minisat22_wrapper.cpp
	${CPP} ${CPPFLAGS} ../../pdsat/src_common/minisat22_wrapper.cpp -c

latin_squares.o: ../../pdsat/src_common/latin_squares.cpp 
	${CPP} ${CPPFLAGS} ../../pdsat/src_common/latin_squares.cpp -c

addit_func.o: ../../pdsat/src_common/addit_func.cpp 
	${CPP} ${CPPFLAGS} ../../pdsat/src_common/addit_func.cpp -c

work_generator.o: work_generator.cpp
	${CPP} ${CPPFLAGS} work_generator.cpp -c
	
clean:
	rm -fr *.o
	rm pdsat_work_generator*
	clear
	