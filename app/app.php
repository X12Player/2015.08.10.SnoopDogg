<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/SnoopTranslator.php";

    $app = new Silex\Application();

    // $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=> __DIR__.'/../views'
    ));

    //Route for default directory
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    //Route returned when form is submitted.
    $app->get("/translated", function() use ($app) {
        return $app['twig']->render('translate.html.twig', array('result' => $output))
    });


    return $app;

?>
