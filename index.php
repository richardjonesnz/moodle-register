<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require 'mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

  $m = new Mustache_Engine(['loader' => new
        Mustache_Loader_FilesystemLoader(dirname(__FILE__) .
        '/templates')]);

$template = $m->loadTemplate('welcomepage');
$data = new stdClass;
$data->title = 'My registration page';
$data->body = 'Welcome to the site.';
$data->copyright = 'Richard 2019';
echo $template->render($data);
?>
</body>