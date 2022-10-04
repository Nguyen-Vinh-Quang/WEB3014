<?php

namespace App\Controllers;

use eftec\bladeone\BladeOne;

class BaseController
{
    //


    public function render($viewName, $data)
    {
        // $views = __DIR__ . '/views';
        // $cache = __DIR__ . '/cache';
        $views = './App/Views';
        $cache = './cache';
        $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
        // echo $blade->run("hello", array("variable1" => "value1")); // it calls /views/hello.blade.php
        echo $blade->run($viewName, $data); // it calls /views/hello.blade.php
    }
}
