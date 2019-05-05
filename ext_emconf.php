<?php
/* * *************************************************************
 * Extension Manager/Repository config file for ext "eh_backend".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 * ************************************************************* */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Backend optimization module',
    'description' => 'A TYPO3 extension for optimizing the backend for editors.',
    'category' => 'plugin',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '9.5.0-9.99.99',
                ],
            'conflicts' => [],
            'suggests' => [],
        ],
    'autoload' => [
        'psr-4' =>
            [
                'EHAERER\\EhBackend\\' => 'Classes',
            ],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Ephraim Härer',
    'author_email' => 'ephraim@ephespage.de',
    'author_company' => 'private',
    'version' => '1.0.0',
    'clearcacheonload' => true,
];
