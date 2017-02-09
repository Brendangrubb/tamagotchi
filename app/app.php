<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchi.php";

    $app = new Silex\Application();

    $app->register(
        new Silex\Provider\TwigServiceProvider(),
        array('twig.path'=>__DIR__.'/../views')
    );

    $app->get('/', function() use ($app) {

        return $app['twig']->render('create_tamagotchi.html.twig');

    });

    $app->get('/main', function() use ($app) {

        return $app['twig']->render('main.html.twig');

    });

    $app->get('/feed', function() use ($app) {

        return $app['twig']->render('feed.html.twig');

    });

    $app->get('/play', function() use ($app) {

        return $app['twig']->render('play.html.twig');

    });

    $app->get('/sleep', function() use ($app) {

        return $app['twig']->render('sleep.html.twig');

    });


    return $app;
?>
