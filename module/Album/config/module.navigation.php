<?php
/**
 * Created by PhpStorm.
 * User: tpojka
 * Date: 2018-11-25
 * Time: 15:08
 */

return [
    'default' => [
        [
            'label' => 'Home',
            'route' => 'home',
        ],
        [
            'label' => 'Album',
            'route' => 'album',
            'pages' => [
                [
                    'label'  => 'Add',
                    'route'  => 'album',
                    'action' => 'add',
                ],
                [
                    'label'  => 'Edit',
                    'route'  => 'album',
                    'action' => 'edit',
                ],
                [
                    'label'  => 'Delete',
                    'route'  => 'album',
                    'action' => 'delete',
                ],
            ],
        ],
    ],
];