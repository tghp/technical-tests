<?php

$container = $app->getContainer();

/**
 * Add view container
 */
$container['view'] = function ($c) {
    $settings = $c->get('settings')['view'];

    $view = new \Slim\Views\Twig($settings['path'], []);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $c->router,
        $c->request->getUri()
    ));

    return $view;
};

/**
 * Add controllers
 */
$container['HomeController'] = function ($c) {
    return new \App\Controllers\HomeController($c->view);
};

$container['AjaxController'] = function ($c) {
    return new \App\Controllers\AjaxController($c->view);
};