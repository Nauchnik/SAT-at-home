#!/bin/sh
db="boinc_pdsat"
sql="CALL Deadline_v3_5_1(98.5,10);"
mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
    use $db;
    $sql;
EOF