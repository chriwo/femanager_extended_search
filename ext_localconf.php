<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(function () {
    // Register namespace "chriwo:" for usage in fluid
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['chriwo'][] =
        'ChriWo\\FemanagerExtendedSearch\\ViewHelpers';
});
