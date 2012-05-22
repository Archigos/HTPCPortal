<?php
$ini_ini_filename = 'settings.ini';
if (@is_readable($ini_ini_filename)) {
	$ini = parse_ini_file($ini_ini_filename, FALSE);
}
else {
	unset($ini);
}

$XBuser = $ini['xbmcuser'];
$XBpass = $ini['xbmcpass'];
$XBSyst = $ini['xbmc'];
$XBPort = $ini['xport'];

$jsonarray1 = array(
    'host' => $XBSyst,
    'port' => $XBPort,
    'user' => $XBuser,
    'pass' => $XBpass
);

$JSONStart  = '<a class="classname2" target="jsonresponse" href="http://' . $XBSyst . ":" . $XBPort . '/xbmcCmds/xbmcHttp?command=ExecBuiltIn&parameter=';
