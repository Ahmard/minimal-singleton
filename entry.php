<?php

use Ahmard\Singleton\Environment;

require_once __DIR__ . '/vendor/autoload.php';

$app = Environment::getInstance()
    ->setName('Test')
    ->setEnv('dev')
    ->setHost('http://localhost');


var_dump(Environment::getInstance()->getAppName());
var_dump(Environment::getInstance()->getAppEnv());
var_dump(Environment::getInstance()->getAppHost());
