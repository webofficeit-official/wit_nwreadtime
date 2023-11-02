<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[WIT] News Read Time',
    'description' => 'Inorder to give composer support we are moving this extension to https://packagist.org/packages/woit/woit-nsreadtime .',
    'category' => 'services',
    'author' => 'Team WebofficeIT, Rahul R S',
    'author_email' => 'info@webofficeit.com',
    'author_company' => 'Weboffice Infotech India Pvt. Ltd.',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'news' => '9.4.0-11.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
