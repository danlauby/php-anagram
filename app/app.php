<?php
require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/Anagram.php";

use Symfony\Component\Debug\Debug;
Debug::enable();

session_start();

if (empty($_SESSION['list_of_words'])) {
    $_SESSION['list_of_words'] = array();
}

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

$app->get("/", function() use($app) {
        return $app['twig']->render('input.html.twig', array('words' => Anagram::getAll()));
});

$app->post("/run", function() use($app) {
    $input_one = $_POST['word'];
    $input_words = $_POST['multiple'];
    $new_anagram = new Anagram($input_one, $input_words);
    $answer = $new_anagram->checkMultWords($input_one, $input_words);
    $new_anagram->save();

    return $app['twig']->render('result.html.twig', array('newword' => $answer));
});

return $app;
?>
