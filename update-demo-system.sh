#!/bin/bash
### This is Silke's script to update the public Wikidata demo server.
### Execute it with the git tag you want to update to. The list of tags is here:
### https://gerrit.wikimedia.org/r/gitweb?p=mediawiki/extensions/Wikibase.git;a=tags
### e.g. "update-demo-system 2012-12-12"

GITTAG=$1

# all MediaWiki install paths
WIKIDIRS="/srv/testrepo/w /srv/testclient-en/w /srv/testclient-he/w"

# Wikibase repo path
REPOPATH="/srv/testrepo/w"

# tagged extensions
TAGGED="Wikibase Diff DataValues"

# Wikibase clients and respective log files
declare -A CLIENTS=( [/srv/testclient-en/w]=/var/log/en-wikidata-replication.log [/srv/testclient-he/w]=/var/log/he-wikidata-replication.log )
# client install paths: ${!CLIENTS[@]}
# log files: ${CLIENTS[@]}

# restart pollForChanges.php
PIDS=$( ps aux | grep pollForChanges.php | grep -v grep | awk -F ' ' '{print $2}' )

for p in $PIDS; do
	kill -15 $p
done

echo "Restarting pollForChanges..."
for client in ${!CLIENTS[@]}; do
	sudo -u wikidata /usr/bin/php $client/extensions/Wikibase/lib/maintenance/pollForChanges.php >> ${CLIENTS[$client]}
	echo "pollForChanges on $client is logging to ${CLIENTS[$client]}..."
done

# for repo: delete all data
/usr/bin/php $REPOPATH/extensions/Wikibase/lib/maintenance/deleteAllData.php --yes-im-sure-maybe
# import test items
cd $REPOPATH/extensions/Wikibase/repo/maintenance
/usr/bin/php importInterlang.php --verbose --ignore-errors simple simple-elements.csv
# import test properties
/usr/bin/php importProperties.php --verbose en en-elements-properties.csv
sleep 1

# git pull on all instances and extensions
for dir in $WIKIDIRS; do
	# git pull MediaWiki core
	cd $dir && git pull
	# git pull master on all extensions
	/bin/bash /usr/local/bin/update-extensions.sh $dir/extensions
	# checkout the git tag
	for t in $TAGGED; do
		cd $dir/extensions/$t
		git checkout $GITTAG
	done
	# run maintenance scripts
	/usr/bin/php $dir/maintenance/update.php --quick
	/usr/bin/php $dir/maintenance/rebuildLocalisationCache.php
	echo "$dir is up to date."
done

#EOF
