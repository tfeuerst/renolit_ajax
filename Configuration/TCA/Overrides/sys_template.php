<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'renolit_ajax',
    'Configuration/TypoScript',
    'Renolit Ajax'
);
