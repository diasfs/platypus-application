<?php

$loader = require "vendor/autoload.php";

use Platypus\App;

App::init(__DIR__ . '/application', $loader);
