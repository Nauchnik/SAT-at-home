#!/bin/bash
date=$(date +%d.%m.%y)
dump_name=boinc_pdsat_$date.sql
mysqldump -uboinc_pdsat -pPASSWORD boinc_pdsat -R > ~/dump/$dump_name
if [ `ls -1 ~/dump/ |wc -l` -gt 9 ]
then
	rm $(ls -1 -r --sort=time ~/dump |head -n 1)
fi
