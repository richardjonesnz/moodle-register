<?php
/**
 * Registration page.
 *
 * @package moodle-registration
 * @copyright 2019 Richard Jones https://richardnz.net
 * @license Creative Commons CC-BY 3.0 NZ
 */
$data = new stdClass();
$data->errors = array();
// var_dump($_POST);
define ('NOT_SELECTED', 'not selected');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['firstname'])) {
        $data->errors[] = 'Firstname is required';
    } else {
        $data->firstname = test_input($_POST['firstname']);
    }

    if (empty($_POST['lastname'])) {
        $data->errors[] = 'Lastname is required';
    } else {
        $data->lastname = test_input($_POST['lastname']);
    }

    if (empty($_POST['email'])) {
        $data->errors[] = 'Email is required';
    } else {
       $data->email = test_input($_POST['email']);
    }

    if ( (empty($_POST['country'])) ||
            ($_POST['country'] == NOT_SELECTED) ) {
        $data->errors[] = 'Country is required';
    } else {
        $data->usercountry = $_POST['country'];
    }

    if ( (empty($_POST['pwd1'])) || (empty($_POST['pwd2'])) ) {
        $data->errors[] = 'Password is required';
    } else if ($_POST['pwd1'] !== $_POST['pwd2']) {
        $data->errors[] = 'Passwords must match';
    } else if (!password_strength_check($_POST['pwd1'])) {
        $data->errors[] = 'Passwords must be between 6 and 40 characters and contain at least one number and at least one uppercase letter and at least one lowercase letter and at least one other symbol.';
    }
}
require_once 'includes/config_inc.php';
$template = $M->loadTemplate('registration');

// Data for Mustache template.
$data->heading = 'User registration form';
$data->body = 'Register for an account at this site.';

// Get a list of countries and prepare for Mustache.
$data->countries = array();
$data->country[] = NOT_SELECTED;
$countries = \utility::fetch_countries();
foreach ($countries as $country) {
    $data->country[] = $country;
}

echo $template->render($data);
/**
 * Process the raw form inputs.
 *
 * @see https://www.w3schools.com/php7/php7_form_validation.asp
 */
function test_input($item) {
  $item = trim($item);
  $item = stripslashes($item);
  $item = htmlspecialchars($item);
  return $item;
}
/**
 * Build regex string depending on requirements for the password.
 * @copyright David Bell, user:2910992
 * @see https://stackoverflow.com/questions/11873990/
 */
function password_strength_check($password, $min_len = 6,
        $max_len = 40, $req_digit = 1, $req_lower = 1,
        $req_upper = 1, $req_symbol = 1) {

    $regex = '/^';
    // Match at least 1 digit.
    if ($req_digit == 1) { $regex .= '(?=.*\d)'; }
    // Match at least 1 lowercase letter.
    if ($req_lower == 1) { $regex .= '(?=.*[a-z])'; }
    // Match at least 1 uppercase letter.
    if ($req_upper == 1) { $regex .= '(?=.*[A-Z])'; }
    // Match at least 1 character that is none of the above.
    if ($req_symbol == 1) { $regex .= '(?=.*[^a-zA-Z\d])'; }
    // Length.
    $regex .= '.{' . $min_len . ',' . $max_len . '}$/';

    if(preg_match($regex, $password)) {
        return TRUE;
    } else {
        return FALSE;
    }
}
?>