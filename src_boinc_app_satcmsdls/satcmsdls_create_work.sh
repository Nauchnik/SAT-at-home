#!/bin/sh

# Workunit creation for the specified rank and number of a square

IN_DIR="/home/boincadm/sandbox/satcmsdls_wus"
PROBLEM="satcmsdls_many_wu"

for IN_FILE in `ls $IN_DIR`
do
  BOINC_INFILE=`basename $IN_FILE`
  IN_NAME=`basename $IN_FILE .txt`
  WU_N=`echo $IN_NAME | cut -d'_' -f2` 
  WU_NAME=${PROBLEM}_${WU_N}

  echo "Creating workunit ${WU_NAME}"

  ./bin/stage_file --copy ${IN_DIR}/${IN_FILE}
  ./bin/create_work --appname satcmsdls --wu_name ${WU_NAME} ${BOINC_INFILE}
done
