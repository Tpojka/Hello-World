<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-23
 * Time: 13:36
 */

namespace Blog;

use Blog\Controller;

return [
    'blog' => [
        'type'    => 'Literal',
        'options' => [
            // Change this to something specific to your module
            'route'    => '/blog',
            'defaults' => [
                'controller'    => Controller\IndexController::class,
                'action'        => 'index',
            ],
        ],
    ],
    'post' => [
        'type' => \Zend\Router\Http\Segment::class,
        'options' => [
            'route'    => '/post[/:id]',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'post',
                'id' => 1,
            ],
            'constraints' => [
                'id' => '\d+',
            ],
        ],
    ],
];