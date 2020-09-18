BOINC_DIR = ../../boinc
BOINC_API_DIR = $(BOINC_DIR)/api
BOINC_LIB_DIR = $(BOINC_DIR)/lib
PDSAT_DIR = ../../pdsat/src_common
MINISAT_DIR = $(PDSAT_DIR)/minisat

CPP = g++

CPPFLAGS += -O3 -static -std=c++11 \
    -I$(BOINC_DIR) \
    -I$(BOINC_LIB_DIR) \
    -I$(BOINC_API_DIR) \
    -I$(PDSAT_DIR) \
    -I$(MINISAT_DIR) \
    -L$(BOINC_API_DIR) \
    -L$(BOINC_LIB_DIR) \

PROGRAM = satcmsdls

all: $(PROGRAM)

clean:
	rm -f $(PROGRAM) *.o

$(PROGRAM): satcmsdls.o minisat22_wrapper.o System.o Options.o Solver.o $(BOINC_LIB_DIR)/libboinc.a $(BOINC_API_DIR)/libboinc_api.a
	$(CPP) $(CPPFLAGS) -o $(PROGRAM) satcmsdls.o minisat22_wrapper.o System.o Options.o Solver.o -pthread -lboinc_api -lboinc

satcmsdls.o: satcmsdls.cpp
	$(CPP) $(CPPFLAGS) -c satcmsdls.cpp

Options.o: $(MINISAT_DIR)/utils/Options.cc
	${CPP} ${CPPFLAGS} $(MINISAT_DIR)/utils/Options.cc -c

System.o: $(MINISAT_DIR)/utils/System.cc
	${CPP} ${CPPFLAGS} $(MINISAT_DIR)/utils/System.cc -c

Solver.o: $(MINISAT_DIR)/core/Solver.cc
	${CPP} ${CPPFLAGS} $(MINISAT_DIR)/core/Solver.cc -c

minisat22_wrapper.o: $(PDSAT_DIR)/minisat22_wrapper.cpp
	${CPP} ${CPPFLAGS} $(PDSAT_DIR)/minisat22_wrapper.cpp -c
