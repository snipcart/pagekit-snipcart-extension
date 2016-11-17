<?php

use Pagekit\Application;

return [

    'name' => 'snipcart',

    'type' => 'extension',

    'main' => function(Application $app){
    },

    'autoload' => [
        'Pagekit\\Snipcart\\' => 'src'
    ],

    'widgets' => [
        'widgets/products.php'
    ],

    'config' => [
        'api_key' => ''
    ],

    'ressources' => [
        'snipcart:' => ''
    ],

    'routes' => [
        '@snipcart' => [
            'path' => '/snipcart',
            'controller' => 'Pagekit\\Snipcart\\Controller\\SnipcartController'
        ],
    ],

    'settings' => '@snipcart/settings',

    'menu' => [
      'snipcart' => [
        'label' => 'Snipcart',
        'url' => '@snipcart',
        'icon' => 'snipcart:icon.svg'
      ],
      'snipcart: products' => [
          'label' => 'Products',
          'parent' => 'snipcart',
          'url' => '@snipcart',
      ],
      'snipcart: settings' => [
          'label' => 'Settings',
          'parent' => 'snipcart',
          'url' => '@snipcart/settings',
      ]
    ]
];
