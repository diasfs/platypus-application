<?php

namespace Controllers;

use Platypus\Twig;
use Platypus\Config;

class DefaultController
{
    public static function Index($request, $response, $context = [])
    {
        $controller = $request->controller;
        $action = $request->action;

        $path = Config::get('app.path');
        $tpl = "{$controller}/{$action}.twig";
        $filename = $path . '/views/' . $tpl;

        if (!file_exists($filename)) {
            $tpl = "404/index.twig";
        }

        $context = array_merge_recursive([
            'req' => $request,
            'config' => Config::$data
        ], $context);

        echo Twig::render($tpl, $context);
    }
}
