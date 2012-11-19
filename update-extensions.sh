#!/bin/bash
# This script can be used to update all extensions installed in a mediawiki. It is based on these assumptions:
# * Your extensions directory is under your mediawiki's installation directory.
# * You want to pull the master branch on all extensions.
# Use the absolute path to the extensions' directory as a argument (e.g. ./update-extensions.sh /var/www/mediawiki/extensions)

EXTENSIONSDIR=$1

cd $EXTENSIONSDIR

for i in $(ls -d */); do
        cd $i
		pwd
        git checkout master
        git pull
        cd ..
done

cd ..

/usr/bin/php maintenance/update.php --quick
