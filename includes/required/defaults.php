<?php
$version = 1.5;
$ini_ini_filename = 'settings.ini';
if (@is_readable($ini_ini_filename)) {
	$ini = parse_ini_file($ini_ini_filename, FALSE);
}
else {
	unset($ini);
}

// Hosts and Ports
if (!isset($ini['xbmc'])) { $ini['xbmc']                    = 'localhost'; }
if (!isset($ini['xport'])) { $ini['xport']                  = 8080; }
if (!isset($ini['xbmcuser'])) { $ini['xbmcuser']			= 'xbmc'; }
if (!isset($ini['xbmcpass'])) { $ini['xbmcpass']			= ''; }
if (!isset($ini['plex'])) { $ini['plex']                    = 'localhost'; }
if (!isset($ini['plexport'])) { $ini['plexport']            = 32400; }
if (!isset($ini['mara'])) { $ini['mara']                    = 'localhost'; }
if (!isset($ini['maraport'])) { $ini['maraport']            = 7000; }
if (!isset($ini['sick'])) { $ini['sick']                    = 'localhost'; }
if (!isset($ini['sbport'])) { $ini['sbport']                = 8081; }
if (!isset($ini['couch'])) { $ini['couch']                  = 'localhost'; }
if (!isset($ini['cpport'])) { $ini['cpport']                = 5000; }
if (!isset($ini['sab'])) { $ini['sab']                      = 'localhost'; }
if (!isset($ini['sabport'])) { $ini['sabport']              = 8080; }
if (!isset($ini['utor'])) { $ini['utor']                    = 'localhost'; }
if (!isset($ini['utport'])) { $ini['utport']                = 85; }
if (!isset($ini['headphones'])) { $ini['headphones']        = 'localhost'; }
if (!isset($ini['headport'])) { $ini['headport']            = 85; }
if (!isset($ini['transmission'])) { $ini['transmission']    = 'localhost'; }
if (!isset($ini['tranport'])) { $ini['tranport']            = 85; }

// API Keys
if (!isset($ini['sabapi'])) { $ini['sabapi']                = ''; }
if (!isset($ini['sbapi'])) { $ini['sbapi']                  = ''; }
if (!isset($ini['matrixapi'])) { $ini['matrixapi']          = ''; }
if (!isset($ini['nzbsuapi'])) { $ini['nzbsuapi']            = ''; }

// Language Pack
if (!isset($ini['langpack'])) { $ini['langpack']            = ''; }
$langpack['close_window']                                   = 'Close Window';
$langpack['powered_by']                                     = 'Powered By';

// RSS Related
if (!isset($ini['rsscount'])) { $ini['rsscount']            = 20; }
$rsscount = $ini['rsscount'];
function writeRSSName($RSSName) {
	echo '<li class="TabbedPanelsTab" tabindex="0">' . $RSSName . '</li>';
}

function writeRSS($feed,$rsscount) {
	echo '<div class="TabbedPanelsContent"><script language="JavaScript" src="includes/required/feed2js/feed2js.php?src=' . $feed . '&amp;num=' . $rsscount . '&amp;targ=myiframe" type="text/javascript"></script></div>';
}

// Navigation Links
$matrix_link												= 'nzbmatrix.com/nzb.php?';

// Advanced Settings NOT in ini by default
if (!isset($ini['charset'])) { $ini['charset']              = 'windows-1251'; }
if (!isset($ini['external_css'])) { $ini['external_css']    = 'includes/css/portal.css'; }

//Array containing list of filenames which should be omitted during directory loading. Wildcards aren't allowed.
$ini['ignore_files'] = array('.', '..', $ini_ini_filename, $ini['description_filename'], $ini['cache_dir'], basename($_SERVER['SCRIPT_NAME']), '.htaccess', '.htpasswd', 'Thumbs.db', 'error_log', 'access_log', 'cgi-bin', '_notes');

//JSON Calls
include('includes/required/jsoncommands.php');

//App Calls
$MenuClass  = 'class="classname2"';
$MenuTarget = 'target="myiframe"';
$MenuLeft   = '<a' . " " . $MenuClass . $MenuTarget;
$CallXBMC   = $ini['xbmc'] . ":" . $ini['xport'];
$CallPlex   = $ini['plex'] . ":" . $ini['plexport'];
$CallMara   = $ini['mara'] . ":" . $ini['maraport'];
$CallSick   = $ini['sick'] . ":" . $ini['sbport'];
$CallCouch  = $ini['couch'] . ":" . $ini['cpport'];
$CallSab    = $ini['sab'] . ":" . $ini['sabport'];
$CalluTor   = $ini['utor'] . ":" . $ini['utport'] . "/gui/";
$CallHead   = $ini['headphones'] . ":" . $ini['headport'];
$CallTran   = $ini['transmission'] . ":" . $ini['tranport'];

function writeAppURL($AppURL,$AppName) {
	echo '<a class="classname2" target="myiframe" href="http://' . $AppURL . '">' . $AppName . '</a>';
}
function writeAppFull($AppURL,$ImageName) {
	echo '<a class="classname2" target="myiframe" href="http://' . $AppURL . '"><img src="includes/images/apps/' . $ImageName . '.png" /></a>';
}
function callRemote($RemType) {
	echo '<a class="classname2" target="myiframe" href="' . $RemType . '">Remote</a>';
}
$Remote = 'remote.php';
$iPad	= 'remote_ipad.php';

?>