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
    'version' => '1.0.2',
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
