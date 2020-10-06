<?php
/**
 * Created by PhpStorm.
 * User: theheretic
 * Email: soltani.achraf@gmail.com
 * Date: 10/4/20
 * Time: 9:26 PM
 */

require '../vendor/autoload.php';
$container = require_once __DIR__ . '/../src/config/bootstrap.php';
require '../src/config/twig.php';
require '../src/config/entities.php';

$app = new \Slim\App($container);
$app->get('/', 'App\Controller\Home\HomeController:home')->setName('_home');

$app->run();