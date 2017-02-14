<?php
require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/Anagram.php";

use Symfony\Component\Debug\Debug;
Debug::enable();

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

return $app;
?>
