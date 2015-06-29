#!/bin/sh

# Clean spam users and teams

db="boinc_pdsat"					# Project database name
dateLine="--- $(date "+%Y.%m.%d %H:%M") ---" 		# Line with date mark for operation log

# Calculate performance of the CluBORun users (with hosts from clusters)
calc_cluster_perf="INSERT INTO CLUSTER_CREDIT(SNAPSHOT_TIME, CRYSTAL_SPIRIT_CREDIT, ENDURANCE_CREDIT, OTHERS_CREDIT)
SELECT NOW() AS SNAPSHOT_TIME, SUM(CASE WHEN NAME = 'Crystal Spirit' THEN TOTAL_CREDIT ELSE 0 END) AS CRYSTAL_SPIRIT_CREDIT,
SUM(CASE WHEN NAME = 'Endurance' THEN TOTAL_CREDIT ELSE 0 END) AS ENDURANCE_CREDIT,
SUM(CASE WHEN NAME NOT IN('Crystal Spirit','Endurance') THEN TOTAL_CREDIT ELSE 0 END) AS OTHERS_CREDIT
FROM user;"

echo ""
echo $dateLine
echo "Calculate performance of the CluBORun users (with hosts from clusters)"

mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
use $db;
    $calc_cluster_perf;
EOF
