#!/bin/sh

# Clean old results, workunits and store of number of deleted WU's in RESEARCH_PROGRESS table

db="boinc_pdsat"					# Project database name
retention_days=14					# Days to which we retain completed results and workunits
dateLine="--- $(date "+%Y.%m.%d %H:%M") ---"		# Line with date mark for operation log

# Section of Bivium9 research
exp9_bivium9_progress="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL $retention_days DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%bivium9%')
 WHERE WORKUNITS_MASK = '%bivium9%'"

exp9_bivium9_results="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND validate_state > 0 AND NAME LIKE '%bivium9%'"
exp9_bivium9_workunits="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND assimilate_state > 0 AND NAME LIKE '%bivium9%'"

# Section of Bivium research
exp10_bivium_progress="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL $retention_days DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%bivium_0%')
 WHERE WORKUNITS_MASK = '%bivium_0%'"

exp10_bivium_results="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND validate_state > 0 AND NAME LIKE '%bivium_0%'"
exp10_bivium_workunits="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND assimilate_state > 0 AND NAME LIKE '%bivium_0%'"

# Section of A5/1 generator research
a5_1_114_progress="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL $retention_days DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%a5_1_114%')
 WHERE WORKUNITS_MASK = '%a5_1_114%'"

a5_1_114_results="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND validate_state > 0 AND NAME LIKE '%a5_1_114%'"
a5_1_114_workunits="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND assimilate_state > 0 AND NAME LIKE '%a5_1_114%'"

# Section of diag10_2 research
diag10_2_progress="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL $retention_days DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%diag10_2%')
 WHERE WORKUNITS_MASK = '%diag10_2%'"

diag10_2_results="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND validate_state > 0 AND NAME LIKE '%diag10_2%'"
diag10_2_workunits="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL $retention_days DAY) AND assimilate_state > 0 AND NAME LIKE '%diag10_2%'"

# Query to remove results left without workunits
orphan_results_delete="DELETE FROM result WHERE workunitid NOT IN(SELECT id FROM workunit)"

echo ""
echo $dateLine
echo "Clean project database $db from old results and workunits data"
echo "--------------------------------"
echo "Bivium9 research clean queries:"
echo $exp9_bivium9_progress
echo $exp9_bivium9_results
echo $exp9_bivium9_workunits
echo "--------------------------------"
echo "exp10_bivium research clean queries:"
echo $exp10_bivium_progress
echo $exp10_bivium_results
echo $exp10_bivium_workunits
echo "--------------------------------"
echo "diag10_2 research clean queries:"
echo $diag10_2_progress
echo $diag10_2_results
echo $diag10_2_workunits
echo "--------------------------------"

echo "Start to queries execution"

mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
use $db;
    $exp9_bivium9_progress;
    $exp9_bivium9_results;
    $exp9_bivium9_workunits;
    $exp10_bivium_progress;
    $exp10_bivium_results;
    $exp10_bivium_workunits;
    $diag10_2_progress;
    $diag10_2_results;
    $diag10_2_workunits;
    $orphan_results_delete;
EOF
