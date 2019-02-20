<?php
/**
 * Simple dubugging class - outputs to a log file
 *
 * @package moodle-registration
 * @copyright 2019 Richard Jones https://richardnz.net
 * @license Creative Commons CC-BY 3.0 NZ
 */
class debugging {
    /**
    * Simple dubugging class - outputs to a log file
    *
    * @param string message - message to log
    * @param varies value - object/array to dump to log
    * @return none.
    */
    public static function logit($message, $value) {

        $file = fopen('mylog.log', 'a');

        if ($file) {
            fwrite($file, print_r($message, true));
            fwrite($file, print_r($value, true));
            fwrite($file, "\n");
            fclose($file);
        }
    }
}