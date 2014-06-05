#!/bin/sh
db="boinc_pdsat"

bivium_update="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL 20 DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%bivium%')
 WHERE WORKUNITS_MASK = '%bivium%'"
bivium_result_delete="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL 20 DAY) AND validate_state > 0 AND NAME LIKE '%bivium%'"
bivium_workunit_delete="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL 20 DAY) AND assimilate_state > 0 AND NAME LIKE '%bivium%'"

a5_1_114_update="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL 30 DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%a5_1_114%')
 WHERE WORKUNITS_MASK = '%a5_1_114%'"
a5_1_114_delete="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL 30 DAY) AND validate_state > 0 AND NAME LIKE '%a5_1_114%' "
a5_1_114_workunit_delete="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL 30 DAY) AND assimilate_state > 0 AND NAME LIKE '%a5_1_114%'"

orphan_results_delete="DELETE FROM result WHERE workunitid NOT IN(SELECT id FROM workunit)"

mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
    use $db;
    $bivium_update;
    $bivium_result_delete;
    $bivium_workunit_delete;
    $a5_1_114_update;
    $a5_1_114_result_delete;
    $a5_1_114_workunit_delete;
    $orphan_results_delete;
EOF
