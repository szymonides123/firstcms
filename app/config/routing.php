<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('blog_index', new Route('/', array(
    '_controller' => 'AppBundle:Blog:index',
)));
$collection->add('blog_post', new Route('/post/{id}', array(
    '_controller' => 'AppBundle:Post:index',
), array(
    'id' => '\d+'
)));


return $collection;
