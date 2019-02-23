<?php
/**
 * Utility class
 *
 * @package moodle-registration
 * @copyright 2019 Richard Jones https://richardnz.net
 * @license Creative Commons CC-BY 3.0 NZ
 */
class utility {
    /**
    * defines the main site navigation links
    *
    * @return String array of URLs and link text.
    */
    public static function fetch_links() {
        $links = array();
        $links[] = ['link' => 'index.php', 'text' => 'Home page'];
        $links[] = ['link' => 'register.php', 'text' => 'Register'];
        $links[] = ['link' => '#', 'text' => 'About'];
        return $links;
    }
}
?>