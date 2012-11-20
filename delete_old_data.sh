#!/bin/sh
db="boinc_pdsat"
sql1="UPDATE RESEARCH_PROGRESS
  SET WORKUNITS_DELETED = WORKUNITS_DELETED + (SELECT COUNT(*) FROM workunit WHERE MOD_TIME < DATE(NOW() - INTERVAL 30 DAY) AND ASSIMILATE_STATE > 0 AND NAME LIKE '%diag10_2%')
  WHERE WORKUNITS_MASK = '%diag10_2%'"
sql2="DELETE FROM result WHERE mod_time < DATE(NOW() - INTERVAL 30 DAY) AND validate_state > 0"
sql3="DELETE FROM workunit WHERE mod_time < DATE(NOW() - INTERVAL 30 DAY) AND assimilate_state > 0"
mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
    use $db;
    $sql1;
    $sql2;
    $sql3;
EOF