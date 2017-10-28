<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('blog_index', new Route('/{id}', array(
    '_controller' => 'AppBundle:Blog:index',
    'id' => 1,
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
$collection->add('blog_cat', new Route('/cat/{id}', array(
    '_controller' => 'AppBundle:Blog:show',
    ), array(
    'id' => '\d+'
)));
$collection->add('blog_search', new Route('/search/{id}', array(
    '_controller' => 'AppBundle:Blog:search',
    'id' => 1,
    ), array(
    'id' => '\d+'
)));
$collection->add('com_add', new Route('/com/{id}', array(
    '_controller' => 'AppBundle:Comment:add',
    'id' => 1,
    ), array(
    'id' => '\d+'
)));
$collection->add('admin_index', new Route('/admin', array(
    '_controller' => 'AppBundle:Admin:index',
    )
));
$collection->add('admin_post', new Route('/aposts', array(
    '_controller' => 'AppBundle:Admin:post',
    )
));
$collection->add('admin_user', new Route('/ausers', array(
    '_controller' => 'AppBundle:Admin:user',
    )
));

return $collection;
