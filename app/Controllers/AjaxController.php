<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

class AjaxController
{
    
    protected $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    public function wotd(Request $request, Response $response)
    {
        $data = [];

        // ?

        return $response->withJson($data);
    }

    public function word(Request $request, Response $response)
    {
        $data = [];

        $data['example'] = $request->getParam('word');

        // ?

        return $response->withJson($data);
    }

    // ?

}