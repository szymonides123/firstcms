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
$collection->add('com_del', new Route('/delcom/{postid}/{comid}', array(
    '_controller' => 'AppBundle:Comment:delete',
    'postid' => 1,
    'comid' => 1,
    ), array(
    'postid' => '\d+',
    'comid' => '\d+',
)));
$collection->add('post_add', new Route('/add/post', array(
    '_controller' => 'AppBundle:Post:add',
    )
));

$collection->add('post_del', new Route('/del/post/{id}', array(
    '_controller' => 'AppBundle:Post:delete',
    ), array(
    'id' => '\d+',

)));
$collection->add('post_edit', new Route('/edit/post/{id}', array(
    '_controller' => 'AppBundle:Post:edit',
    ), array(
    'id' => '\d+',

)));
$collection->add('user_dezactivate', new Route('/user/dez/{id}', array(
    '_controller' => 'AppBundle:User:dezactivate',
    ), array(
    'id' => '\d+',

)));

$collection->add('user_activate', new Route('/user/act/{id}', array(
    '_controller' => 'AppBundle:User:activate',
        ), array(
    'id' => '\d+',
)));

$collection->add('user_changerole', new Route('/user/changerole/{id}', array(
    '_controller' => 'AppBundle:User:changerole',
    ),array(
    'id' => '\d+',
        )));

return $collection;
