<?php
/**
 * Created by PhpStorm.
 * User: theheretic
 * Email: soltani.achraf@gmail.com
 * Date: 10/6/20
 * Time: 8:41 PM
 */

use Doctrine\ORM\EntityManager;
use App\Entity\UserRepository;

$container[UserRepository::class] = function ($container) {
    return new UserRepository($container[EntityManager::class]);
};