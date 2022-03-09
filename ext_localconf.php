<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'renolit_ajax',
    'data',
    [
        \RENOLIT\renolitAjax\Controller\DataController::class => 'show',
    ]
);

