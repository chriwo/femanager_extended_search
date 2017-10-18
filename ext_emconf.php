<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extended femanager search',
    'description' => 'Expand the search function of femanager to be able to filter by user groups',
    'category' => 'fe',
    'author' => 'Christian Wolfram',
    'author_email' => 'c.wolfram@chriwo.de',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'version' => '2.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'femanager' => '3.0.0-3.99.99'
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
