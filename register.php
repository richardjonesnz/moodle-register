<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<?php var_dump($_POST);
require_once 'includes/config_inc.php';
$template = $M->loadTemplate('registration');
$data = new stdClass();
$data->greeting = 'Hello';
echo $template->render($data);

?>



<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
