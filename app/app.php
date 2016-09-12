<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongCounter.php";

    //Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    //Set Silex debug mode in $app oci_fetch_object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('input-number.html.twig');
    });

    $app->get("/ping_ponged", function() use ($app) {
        $my_PingPongCounter = new PingPongCounter;
        $ping_ponged_phrase = $my_PingPongCounter->countUp($_GET['number']);

        return $app['twig']->render('pingponged.html.twig', array('result' => $ping_ponged_phrase));
    });

    return $app;
?>
