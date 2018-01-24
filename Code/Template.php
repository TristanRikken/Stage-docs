<?php

include 'formulier_DB.php';
require 'layout_rabo.tpl';
Mustache_Autoloader::register();

$mustache = new Mustache_Engine(array(
    'template_class_prefix' => '__MyTemplates_',
    'cache' => dirname(__FILE__).'/tmp/cache/mustache',
    'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
    'cache_lambda_templates' => true,
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views/partials'),
    'helpers' => array('i18n' => function($text) {
        // do something translatey here...
    }),
    'escape' => function($value) {
        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    },
    'charset' => 'ISO-8859-1',
    'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
    'strict_callables' => true,
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
));

$tpl = $mustache->loadTemplate('foo'); // loads __DIR__.'/views/foo.mustache';
echo $tpl->render(array('bar' => 'baz'));

    if (isset($_POST['verstuur'])) {

        $voornaam = $_POST['vnaam'];
        $tussenvoegsel = ($_POST['tvoegsel']);
        $achternaam = ($_POST['anaam']);
        $emailadres = ($_POST['email']);

        echo "<br>" . getFormulier($voornaam, $tussenvoegsel, $achternaam, $emailadres);
    };
?>
