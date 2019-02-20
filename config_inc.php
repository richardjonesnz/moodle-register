<?php
/**
 * Configuration file for user registration
 *
 * @package moodle-registration
 * @copyright 2019 Richard Jones https://richardnz.net
 * @license Creative Commons CC-BY 3.0 NZ
 */
require 'mustache/src/Mustache/Autoloader.php';
        Mustache_Autoloader::register();

$M = new Mustache_Engine(['loader' => new Mustache_Loader_FilesystemLoader
        (dirname(__FILE__) . '/templates')]);

// Site settings.
define('LIVE', false); // Site status.
define('EMAIL', 'richardnz@outlook.com');
define('BASE_URL', 'http://192.169.1.100/register');
define('MARIADB', '/var/www/mariadb_connect.php');
date_default_timezone_set('PACIFIC/Auckland');

// Error management.
function my_error_handler($errno, $errstr, $errfile, $errline) {
    $message = new stdClass;

    $message->body = "An error occured in '$errfile' on line '$errline':
            $errstr";
    $message->date = "date('n-j-Y H:i:s')";

    if (!LIVE) {
        // Send the message to the screen.
        $message->class = 'bg-danger text-white';
       $template = $M->loadTemplate('errors');
       echo $template->render($message);
    } else {
        // Send an email to the admin.
        $message->class = 'visible-print-block';
        mail(EMAIL, 'Site error', $message, 'From: admin@localhost.com');

        // Let the user know something is wrong.
        if ($enumber != E_NOTICE)  {
            echo 'A system error has occured, apologies for any inconvenience.';
        }
    }
}
set_error_handler('my_error_handler');

function myautoloader($classname) {
    include 'classes/' . $classname . '.php';
}
spl_autoload_register('myautoloader');
?>