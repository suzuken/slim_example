<?php
require __DIR__ . '/../vendor/autoload.php';
$twig = new \Slim\Views\Twig();
$twig->twigTemplateDirs = __DIR__ . "/../src/views";
$app = new \Slim\Slim([
    'view' => $twig
]);

$app->get('/hello/:name', function($name) use ($app) {
    $app->render('name.html.twig', ['name' => $name]);
});

$app->get('/top', function() use ($app) {
    $app->render('top.html.twig');
});

$app->run();
