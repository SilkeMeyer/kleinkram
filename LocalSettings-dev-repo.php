<?php
# This file was automatically generated by the MediaWiki 1.21alpha
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "Wikidata-dev-repo";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/w";
$wgScriptExtension  = ".php";
$wgArticlePath      = "/wiki/$1";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "http://wikidata-dev-repo.wikimedia.de";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
#$wgLogo             = "$wgStylePath/common/images/wiki.png";
$wgLogo = "http://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Broken_glass.jpg/128px-Broken_glass.jpg";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "apache@wikidata-dev-repo.wikimedia.de";
$wgPasswordSender   = "apache@wikidata-dev-repo.wikimedia.de";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

## Database settings
// credentials link

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = false;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = "$IP/cache";
#$wgCacheDirectory = false;

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "blah";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "blah";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;

// End of automatically generated settings.
// Add more configuration options below.
$wgShowExceptionDetails = true;

// experimental features
define( 'WB_EXPERIMENTAL_FEATURES', true );

// Wikibase extensions and dependencies
require_once( "$IP/extensions/Diff/Diff.php" );
require_once( "$IP/extensions/DataValues/DataValues.php" );
require_once( "$IP/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php" );
require_once( "$IP/extensions/Wikibase/lib/WikibaseLib.php" );
require_once( "$IP/extensions/Wikibase/repo/Wikibase.php" );
require_once( "$IP/extensions/Wikibase/repo/ExampleSettings.php" );

$wgContentHandlerUseDB = true;

// more extensions

require_once("$IP/extensions/ApiSandbox/ApiSandbox.php");
require_once("$IP/extensions/APC/APC.php");
$wgGroupPermissions['administrator']['apc'] = true;
$wgGroupPermissions['bureaucrat']['apc'] = true;
require_once("$IP/extensions/Nuke/Nuke.php");
require_once( "$IP/extensions/OAI/OAIRepo.php" );
$oaiAgentRegex = '!.*!';
$oaiAuth = false;
$oaiAudit = false;
require_once( "$IP/extensions/SiteMatrix/SiteMatrix.php" );
$wgSiteMatrixFile = "$IP/../../mediawiki-config/langlist";
$wgSiteMatrixClosedSites = "$IP/../../mediawiki-config/closed.dblist";
$wgSiteMatrixPrivateSites = "$IP/../../mediawiki-config/private.dblist";
$wgSiteMatrixFishbowlSites = "$IP/../../mediawiki-config/fishbowl.dblist";
require_once( "$IP/extensions/SpamBlacklist/SpamBlacklist.php" );
require_once( "$IP/extensions/DismissableSiteNotice/DismissableSiteNotice.php" );

require_once( "$IP/extensions/Interwiki/Interwiki.php" );
// To grant sysops permissions to edit interwiki data
$wgGroupPermissions['administrator']['interwiki'] = true;

// DismissableSiteNotice
$wgSiteNotice = '<div style="font-size: 90%; background: #FFCC33; padding: 1ex; border: #940 dotted; margin-top: 1ex; margin-bottom: 1ex; ">This is a demo system that shows the current development state of Wikidata.<br /> <strong>This is the bleeding edge, updated automatically every 20 minutes.</strong><br /> Expect things to be broken. </div>';

// Profiling
// (default settings from Wikibase/lib/ProfilingSettings.php)

// Only record profiling info for pages that took longer than this
$wgProfileLimit = 0.1;
// Log sums from profiling into "profiling" table in db
$wgProfileToDatabase = true;
// If true, print a raw call tree instead of per-function report
$wgProfileCallTree = false;
// Should application server host be put into profiling table
$wgProfilePerHost = false;

// Settings for UDP profiler
//$wgUDPProfilerHost = '127.0.0.1';
//$wgUDPProfilerPort = '3811';

// Detects non-matching wfProfileIn/wfProfileOut calls
$wgDebugProfiling = true;
// Output debug message on every wfProfileIn/wfProfileOut
$wgDebugFunctionEntry = 0;
// Lots of debugging output from SquidUpdate.php
$wgEnableProfileInfo = true;

// debugging

$wgDebugToolbar = true;
$wgShowSQLErrors = true;
$wgShowDBErrorBacktrace = true;
$wgDevelopmentWarnings = true;
$wgEnableJavaScriptTest = true;

// config internal test desktop computer
//$wgContentHandlerUseDB = true;
//$wgULSIMEEnabled = false;
//
