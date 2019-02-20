<?php
/**
 * Registration login/register page.
 *
 * @package moodle-registration
 * @copyright 2019 Richard Jones https://richardnz.net
 * @license Creative Commons CC-BY 3.0 NZ
 */
use classes\utility;
require_once 'config_inc.php';
$template = $M->loadTemplate('welcomepage');
$data = new stdClass;
$data->pagetitle = 'Home page';
$data->heading = 'User registration page';
$data->greeting = 'Welcome ';
$data->name = (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '';
$data->body = 'This site allows you to manage your registration to our courses.  Please select from one of the links below';
$data->navcardtitle = 'Navigation';
$data->navcardbody = 'On other pages:';
$data->links = \utility::fetch_links();
$data->copyright = 'Richard 2019';
echo $template->render($data);
?>
</body>