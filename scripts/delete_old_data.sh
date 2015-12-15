#!/bin/sh

# Clean old results, workunits and store of number of deleted WU's in RESEARCH_PROGRESS table

db="boinc_pdsat"					# Project database name
retention_days=14					# Days to which we retain completed results and workunits
dateLine="--- $(date "+%Y.%m.%d %H:%M") ---"		# Line with date mark for operation log

# Section of diag10_2 research
diag10_2_progress="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL $retention_days DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%diag10_2%')
 WHERE WORKUNITS_MASK = '%diag10_2%'"

diag10_2_workunits="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND assimilate_state > 0 AND NAME LIKE '%diag10_2%'"

# Query to remove results left without workunits
orphan_results_delete="DELETE FROM result WHERE workunitid NOT IN(SELECT id FROM workunit)"

echo ""
echo $dateLine
echo "Clean project database $db from old results and workunits data"
echo "--------------------------------"
echo "diag10_2 research clean queries:"
echo $diag10_2_progress
#echo $diag10_2_results
echo $diag10_2_workunits
echo "--------------------------------"

echo "Start to queries execution"

mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
use $db;
    $diag10_2_progress;
    $diag10_2_workunits;
    $orphan_results_delete;
EOF
