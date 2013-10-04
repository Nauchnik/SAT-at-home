#!/bin/sh
db="boinc_pdsat"

ls_10_3_inc70_update="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL 30 DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%ls_10_3_inc70%')
 WHERE WORKUNITS_MASK = '%ls_10_3_inc70%'"
ls_10_3_inc70_result_delete="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL 30 DAY) AND validate_state > 0 AND NAME LIKE '%ls_10_3_inc70%'"
ls_10_3_inc70_workunit_delete="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL 30 DAY) AND assimilate_state > 0 AND NAME LIKE '%ls_10_3_inc70%'"

ls_10_3_inc72_update="UPDATE RESEARCH_PROGRESS
   SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL 30 DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%ls_10_3_inc72%')
 WHERE WORKUNITS_MASK = '%ls_10_3_inc72%'"
ls_10_3_inc72_result_delete="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL 30 DAY) AND validate_state > 0 AND NAME LIKE '%ls_10_3_inc72%'"
ls_10_3_inc72_workunit_delete="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL 30 DAY) AND assimilate_state > 0 AND NAME LIKE '%ls_10_3_inc72%'"

orphan_results_delete="DELETE FROM result WHERE workunitid NOT IN(SELECT id FROM workunit)"

mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
    use $db;
    $ls_10_3_inc70_update;
    $ls_10_3_inc70_result_delete;
    $ls_10_3_inc70_workunit_delete;
    $ls_10_3_inc72_update;
    $ls_10_3_inc72_result_delete;
    $ls_10_3_inc72_workunit_delete;
    $orphan_results_delete;
EOF
