<?php
defined('TYPO3_MODE') || die('Access denied.');

if (TYPO3_MODE === 'BE') {
    /* Hook into the page module */
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawHeaderHook']['eh_backend'] =
        \EHAERER\EhBackend\Hooks\PageHook::class . '->render';
}
