<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-25
 * Time: 16:01
 */

namespace Blog;

use Zend\Router\Http\Literal;

return [
    // Define a new route called "blog"
    'blog' => [
        // Define a "literal" route type:
        'type' => Literal::class,
        // Configure the route itself
        'options' => [
            // Listen to "/blog" as uri:
            'route' => '/blog',
            // Define default controller and action to be called when
            // this route is matched
            'defaults' => [
                'controller' => Controller\ListController::class,
                'action'     => 'index',
            ],
        ],
    ],
];