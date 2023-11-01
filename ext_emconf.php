<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Wit Nwreadtime',
    'description' => 'Wit news extension article readable time counter',
    'category' => 'services',
    'author' => 'Rahul R S',
    'author_email' => 'rahul.rs@webofficeit.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'news' => '9.4.0-11.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
