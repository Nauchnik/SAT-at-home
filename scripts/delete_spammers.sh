#!/bin/sh

# Clean spam users and teams

db="boinc_pdsat"					# Project database name
dateLine="--- $(date "+%Y.%m.%d %H:%M") ---" 		# Line with date mark for operation log

# Section of Bivium9 research
delete_spam_users="DELETE FROM user WHERE teamid=0 AND total_credit=0 AND id NOT IN (SELECT userid FROM host)"
delete_spam_teams="DELETE FROM team WHERE nusers=0 AND total_credit=0"
delete_spam_profiles="DELETE FROM profile WHERE userid NOT IN(SELECT id FROM user)"
delete_spam_posts="DELETE FROM post WHERE user NOT IN(SELECT id FROM user)"

echo ""
echo $dateLine
echo "Clean spam data"

mysql --defaults-extra-file=/var/lib/boinc/pdsat/.my.cnf << EOF
use $db;
    $delete_spam_users;
    $delete_spam_teams;
    $delete_spam_profiles;
    $delete_spam_posts;
EOF
