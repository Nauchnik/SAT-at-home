#!/bin/sh
db="boinc_pdsat"
sql="CALL UPDATE_BAGE_STATISTICS()"
mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
    use $db;
    $sql;
EOF