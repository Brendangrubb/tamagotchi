<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchi.php";

    $app = new Silex\Application();

    $app->register(
        new Silex\Provider\TwigServiceProvider(),
        array('twig.path'=>__DIR__.'/../views')
    );

    $app->get('/main', function() use ($app) {

        return $app['twig']->render('main.html.twig');

    });


    return $app;
?>
