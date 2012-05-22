<?php
$css_external_path = FALSE;
$css_external_path = $ini['external_css'];
if ('' != $css_external_path) {
    if ( preg_match('|^https?://|i', $css_external_path) || 0 == substr_compare($css_external_path, '/', 0, 1) ) {
        $css_is_external = TRUE;
    }
    else if ( is_readable($css_external_path) ) {
        $css_external_path =  ('/' != dirname($_SERVER['SCRIPT_NAME']) ? dirname($_SERVER['SCRIPT_NAME']) : '' ) . '/' . $css_external_path;
        $css_is_external = TRUE;
    }
}
if ( $css_is_external ) {
    print('<link href="' . $css_external_path . '" rel="stylesheet" type="text/css">');
    } else { ?> <link rel="stylesheet" type="text/css" href="includes/css/portal.css" /> <?php 
} ?>