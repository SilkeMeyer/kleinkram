# This script checks whether the pollForChanges.php script is running,
# it deletes all data from the mysql database of a Wikibase repo,
# it empties the Wikibase-related database tables from the client's db.
# Afterwards, it reimports the chemical elements to the repo, runs two scripts:
# maintenance/update.php and maintenance/rebuildLocalisationCache.php.
#
# The script does not take database prefixes into account!
# If you use database prefixes: Right now, the script does not use variables
# for this so please add the prefixes manually.


#####################
### Customize me! ###
#####################

# database user:
MYSQLUSER="blah"

# path to mysql credentials file
MYSQLCRED="/path/to/credentials"

# repo db:
REPODB="blahblah"

# client db:
CLIENTDB="blahblahblah"

# installation path mediawiki core of repo
REPOPATH="/var/www/blah"

# installation path mediawiki core of client
CLIENTPATH="/var/www/blubb"

#####################################################
#####################################################
#####################################################

# git pull ALL the repos
## repo
### mediawiki core
cd $REPOPATH
pwd
git checkout master
git pull
### extensions
cd $REPOPATH/extensions
for i in $(ls -d */); do
	cd $i
	pwd
	git checkout master
	git pull
	cd ..
done

#####################################################
## client
### mediawiki core
cd $CLIENTPATH
pwd
git checkout master
git pull
### extensions
cd $CLIENTPATH/extensions
for i in $(ls -d */); do
	cd $i
	pwd
	git checkout master
	git pull
	cd ..
done

#####################################################

# check if pollForChanges is running
PID=$( ps aux | grep pollForChanges.php | grep -v grep | awk -F ' ' '{print $2}' )

if [ "$PID" != "" ]; then
	echo "pollForChanges is running"
else
	echo "Starting pollForChanges..."
	/usr/bin/php $CLIENTPATH/extensions/Wikibase/lib/maintenance/pollForChanges.php > /var/log/wikidata-replication.log
	sleep 2
	echo "Success. pollForChanges is logging to /var/log/wikidata-replication.log"
fi

# clean the database
# The 'yes-im-sure-maybe' option executes the script without further questions!
# if successful, reimport test data
/usr/bin/php $REPOPATH/extensions/Wikibase/lib/maintenance/deleteAllData.php --yes-im-sure-maybe

sleep 1

# truncate the profiling database tables
/usr/bin/mysql --defaults-extra-file=$MYSQLCRED --database=$REPODB -e 'TRUNCATE TABLE profiling'
/usr/bin/mysql --defaults-extra-file=$MYSQLCRED --database=$CLIENTDB -e 'TRUNCATE TABLE profiling'
echo "Purged profiling database tables..."

sleep 1
# reimport test data
cd $REPOPATH/extensions/Wikibase/repo/maintenance

/usr/bin/php importInterlang.php --verbose --ignore-errors simple simple-elements.csv
/usr/bin/php importProperties.php --verbose en en-elements-properties.csv

sleep 1

cd $REPOPATH

/usr/bin/php maintenance/update.php --quick
/usr/bin/php maintenance/rebuildLocalisationCache.php

echo "Repo is ready for demo time. pollForChanges is logging to /var/log/wikidata-replication.log"

#EOF
