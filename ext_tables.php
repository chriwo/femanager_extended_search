<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/* ===========================================================================
    Add default TypoScript
=========================================================================== */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Femanager extended search'
);
