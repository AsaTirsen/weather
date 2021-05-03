<?php

/**
 * Sample configuration file for Anax webroot.
 */

/**
 * Define essential Anax paths, end with /
 */
define("ANAX_INSTALL_PATH", realpath(__DIR__ . "/.."));



/**
 * Include autoloader.
 */
require ANAX_INSTALL_PATH . "/vendor/autoload.php";



/**
 * Use $di as global identifier (used in views by viewhelpers).
 */
$di = null;



/**
 * Include others.
 */
foreach (glob(__DIR__ . "/Mock/*.php") as $file) {
    require $file;

    ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
}
