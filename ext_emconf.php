<?php

/** @phpstan-ignore-next-line */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless News',
    'description' => 'This extension provides integration with news to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.com',
    'category' => 'fe',
    'internal' => '',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-11.5.99',
            'frontend' => '10.0.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '2.0.0-3.9.9',
        ],
    ],
];
