<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extended femanager search',
    'description' => 'Example addon extension to demonstrate an extended search',
    'category' => 'example',
    'author' => 'Christian Wolfram',
    'author_email' => 'c.wolfram@ideenwerft.com',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-7.99.99',
            'typo3' => '7.6.0-7.9.99',
            'femanager' => '2.0.0-2.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'ChriWo\\FemanagerExtendedSearch\\' => 'Classes',
        ]
    ],
];
