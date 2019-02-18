<?php

require  '../moodle/lib/mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$m = new Mustache_Engine(['loader' => new
        Mustache_Loader_FilesystemLoader(dirname(__FILE__) .
        '/templates')]);

$template = $m->loadTemplate('welcomepage');
echo $template->render(['firstname' => 'John',
        'visitorNumber' => 7]);
?>
