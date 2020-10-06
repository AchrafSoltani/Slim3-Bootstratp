<?php
/**
 * Created by PhpStorm.
 * User: theheretic
 * Email: soltani.achraf@gmail.com
 * Date: 10/6/20
 * Time: 8:01 PM
 */

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Slim\Container;

/** @var Container $container */
$container = require_once __DIR__ . '/src/config/bootstrap.php';

return ConsoleRunner::createHelperSet($container[EntityManager::class]);