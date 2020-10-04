<?php
/**
 * Created by PhpStorm.
 * User: theheretic
 * Email: soltani.achraf@gmail.com
 * Date: 10/4/20
 * Time: 9:44 PM
 */

namespace App\Controller\Home;
use Psr\Container\ContainerInterface;

class HomeController
{
    protected $container;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function home($request, $response, $args) {
        // your code
        // to access items in the container... $this->container->get('');
        // return $this->view->render($response, 'home.html.twig', []);
        $this->container->get('view');
        $response->getBody()->write("Hello Slim Plus!");
        return $response;
    }
}