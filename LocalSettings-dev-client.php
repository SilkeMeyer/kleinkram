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

$wgSitename      = "Wikidata-dev-client";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/w";
$wgScriptExtension  = ".php";
$wgArticlePath = "/wiki/$1";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "http://wikidata-dev-client.wikimedia.de";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "http://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Broken_glass.jpg/128px-Broken_glass.jpg";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "apache@wikidata-dev-client.wikimedia.de";
$wgPasswordSender   = "apache@wikidata-dev-client.wikimedia.de";

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
#$wgCacheDirectory = "$IP/cache";
$wgCacheDirectory = false;

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


# End of automatically generated settings.
# Add more configuration options below.
$wgShowExceptionDetails = true;

// experimental features
define( 'WB_EXPERIMENTAL_FEATURES', true );

// extensions
require_once( "$IP/extensions/Diff/Diff.php" );
require_once( "$IP/extensions/DataValues/DataValues.php");
require_once( "$IP/extensions/Wikibase/lib/WikibaseLib.php" );
require_once( "$IP/extensions/Wikibase/client/WikibaseClient.php" );

//require_once( "$IP/extensions/AbuseFilter/AbuseFilter.php" );
require_once( "$IP/extensions/AntiBot/AntiBot.php" );
require_once( "$IP/extensions/AntiSpoof/AntiSpoof.php" );
require_once( "$IP/extensions/ApiSandbox/ApiSandbox.php" );
require_once( "$IP/extensions/ArticleFeedback/ArticleFeedback.php" );
require_once( "$IP/extensions/AssertEdit/AssertEdit.php" );
require_once( "$IP/extensions/Babel/Babel.php" );
require_once( "$IP/extensions/CategoryTree/CategoryTree.php" );
require_once( "$IP/extensions/CentralNotice/CentralNotice.php" );
require_once( "$IP/extensions/CharInsert/CharInsert.php" );
require_once( "$IP/extensions/CheckUser/CheckUser.php" );
require_once( "$IP/extensions/Cite/Cite.php" );
require_once( "$IP/extensions/cldr/cldr.php" );
require_once( "$IP/extensions/ClickTracking/ClickTracking.php" );
require_once( "$IP/extensions/Collection/Collection.php" );
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once( "$IP/extensions/DismissableSiteNotice/DismissableSiteNotice.php" );
require_once( "$IP/extensions/EditPageTracking/EditPageTracking.php" );
require_once( "$IP/extensions/EmailCapture/EmailCapture.php" );
require_once( "$IP/extensions/ExpandTemplates/ExpandTemplates.php" );
require_once( "$IP/extensions/FeaturedFeeds/FeaturedFeeds.php" );
require_once( "$IP/extensions/FlaggedRevs/FlaggedRevs.php" );
require_once( "$IP/extensions/Gadgets/Gadgets.php" );
require_once( "$IP/extensions/GlobalUsage/GlobalUsage.php" );
require_once( "$IP/extensions/ImageMap/ImageMap.php" );
require_once( "$IP/extensions/InputBox/InputBox.php" );
require_once( "$IP/extensions/Interwiki/Interwiki.php" );
require_once( "$IP/extensions/LocalisationUpdate/LocalisationUpdate.php" );
require_once( "$IP/extensions/MarkAsHelpful/MarkAsHelpful.php" );
require_once( "$IP/extensions/Math/Math.php" );
require_once( "$IP/extensions/MobileFrontend/MobileFrontend.php" );
require_once( "$IP/extensions/MoodBar/MoodBar.php" );
require_once( "$IP/extensions/MWSearch/MWSearch.php" );
require_once( "$IP/extensions/Nuke/Nuke.php" );
// OAI see below
require_once( "$IP/extensions/OpenSearchXml/OpenSearchXml.php" );
require_once("$IP/extensions/Oversight/HideRevision.php");
$wgGroupPermissions['oversight']['hiderevision'] = true;
$wgGroupPermissions['oversight']['oversight'] = true;
require_once( "$IP/extensions/PagedTiffHandler/PagedTiffHandler.php" );
require_once( "$IP/extensions/PageTriage/PageTriage.php" );
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
require_once( "$IP/extensions/PdfHandler/PdfHandler.php" );
require_once( "$IP/extensions/Poem/Poem.php" );
require_once( "$IP/extensions/PostEdit/PostEdit.php" );
require_once( "$IP/extensions/Renameuser/Renameuser.php" );
require_once( "$IP/extensions/SecurePoll/SecurePoll.php" );
require_once( "$IP/extensions/SimpleAntiSpam/SimpleAntiSpam.php" );
//require_once( "$IP/extensions/SimpleSurvey/SimpleSurvey.php" );
require_once( "$IP/extensions/SiteMatrix/SiteMatrix.php" );
require_once( "$IP/extensions/SpamBlacklist/SpamBlacklist.php" );
require_once( "$IP/extensions/SwiftCloudFiles/SwiftCloudFiles.php" );
require_once( "$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php" );
require_once( "$IP/extensions/TitleBlacklist/TitleBlacklist.php" );
require_once( "$IP/extensions/TitleKey/TitleKey.php" );
require_once( "$IP/extensions/TorBlock/TorBlock.php" );
require_once( "$IP/extensions/TrustedXFF/TrustedXFF.php" );
require_once( "$IP/extensions/UploadBlacklist/UploadBlacklist.php" );
require_once( "$IP/extensions/UserDailyContribs/UserDailyContribs.php" );
require_once( "$IP/extensions/Vector/Vector.php" );
require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
require_once( "$IP/extensions/wikihiero/wikihiero.php" );
require_once( "$IP/extensions/WikiLove/WikiLove.php" );
require_once( "$IP/extensions/WikimediaMessages/WikimediaMessages.php" );
require_once( "$IP/extensions/WikimediaShopLink/WikimediaShopLink.php" );
//require_once( "$IP/extensions/ZeroRatedMobileAccess/ZeroRatedMobileAccess.php" );
// OAI repository for update server
@include( $IP.'/extensions/OAI/OAIRepo.php' );
$oaiAgentRegex = '/experimental/';
$oaiAuth = true; # broken... squid? php config? wtf
$oaiAudit = true;
$oaiAuditDatabase = 'oai';
// Oversight
require_once("$IP/extensions/Oversight/HideRevision.php");
$wgGroupPermissions['oversight']['hiderevision'] = true;
$wgGroupPermissions['oversight']['oversight'] = true;
// PoolCounter
require_once( "$IP/extensions/PoolCounter/PoolCounterClient.php" );
$wgPoolCounterConf = array(
    'Article::view' => array(
        'class' => 'PoolCounter_Client',
       /* ... any extension-specific options... */
    ),
); 
// Timeline
//require_once("$IP/extensions/timeline/Timeline.php"); // Add EasyTimeline extension
//$wgTimelineSettings->ploticusCommand = "/usr/bin/ploticus";
//$wgTimelineSettings->ploticusCommand = "/usr/bin/pl";
//$wgTimelineSettings->perlCommand = "/usr/bin/perl";

// ArticleFeedbackv5
$wgArticleFeedbackv5Categories = array( 'Foo_bar', 'Baz' );
$wgArticleFeedbackv5DashboardCategory = 'Foo_bar';
$wgArticleFeedbackBlacklistv5Categories = array( 'Baz' );
$wgArticleFeedbackv5Namespaces = array( NS_MAIN, NS_HELP, NS_PROJECT );
$wgArticleFeedbackv5MaxCommentLength = 400;


// Wikidata specific settings
$wgWBSettings['repoUrl'] = 'http://wikidata-dev-repo.wikimedia.de';
$wgWBSettings['repoScriptPath'] = '/w';
$wgWBSettings['repoArticlePath'] = '/wiki/$1';
$wgWBSettings['siteGlobalID'] = 'enwiki';
$wgWBSettings['repoDatabase'] = 'devrepo';
$wgWBSettings['changesDatabase'] = 'devrepo';

// Repo Namespaces
$wgWBSettings['repoNamespaces'] = array(
                'wikibase-item' => 'Item',
                'wikibase-property' => 'Property'
);

// Load Balancer
$wgLBFactoryConf = array(
        // In order to seamlessly access a remote wiki, as the pollForChanges script needs to do,
        // LBFactory_Multi must be used.
        'class' => 'LBFactory_Multi',
 
        // Connect to all databases using the same credentials.
        'serverTemplate' => array(
                'dbname'      => $wgDBname,
                'user'        => $wgDBuser,
                'password'    => $wgDBpassword,
                'type'        => 'mysql',
                'flags'       => DBO_DEFAULT | DBO_DEBUG,
        ),
 
        // Configure two sections, one for the repo and one for the client.
        // Each section contains only one server.
        'sectionLoads' => array(
                'DEFAULT' => array(
                        'localhost' => 1,
                ),
                'repo' => array(
                        'local1' => 1,
                ),
        ),
 
        // Map the wiki database names to sections. Database names must be unique,
        // i.e. may not exist in more than one section.
        'sectionsByDB' => array(
                $wgDBname => 'DEFAULT',
                'devrepo' => 'repo',
        ),
 
        // Map host names to IP addresses to bypass DNS.
        //
        // NOTE: Even if all sections run on the same MySQL server (typical for a test setup),
        // they must use different IP addresses, and MySQL must listen on all of them.
        // The easiest way to do this is to set bind-address = 0.0.0.0 in the MySQL
        // configuration. Beware that this makes MySQL listen on you ethernet port too.
        // Safer alternatives include setting up mysql-proxy or mysqld_multi.
        'hostsByName' => array(
                'localhost' => '127.0.0.1:3306',
                'local1' => '127.0.2.1',
//                'local2' => '127.0.2.2',
//                'local3' => '127.0.2.3',
        ),
 
        // Set up as fake master, because there are no slaves.
        'masterTemplateOverrides' => array( 'fakeMaster' => true ),
);

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
error_reporting(E_ALL);
ini_set("display_errors", 1);
