<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Custom event in TYPO3',
    'description' => 'Example for dispatching and using a custom event.',
    'category' => 'misc',
    'author' => 'Manuel Schnabel',
    'author_email' => 'service@passionweb.de',
    'author_company' => 'PassionWeb Manuel Schnabel',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => ['typo3' => '11.5.0-12.4.99'],
        'conflicts' => [],
        'suggests' => [],
    ],
];
