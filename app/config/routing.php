<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('blog_index', new Route('/{id}', array(
    '_controller' => 'AppBundle:Blog:index',
    'page' => 1,
    ), array(
    'id' => '\d+'
)));
$collection->add('blog_post', new Route('/post/{id}', array(
    '_controller' => 'AppBundle:Post:index',
), array(
    'id' => '\d+'
)));
$collection->add('dupa', new Route('/sentence', array(
    '_controller' => 'AppBundle:Sentence:index',
)));


return $collection;
