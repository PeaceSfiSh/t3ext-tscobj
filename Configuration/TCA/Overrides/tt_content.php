<?php
defined('TYPO3_MODE') or die();

// Add plugins
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:tscobj/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
        'tscobj_pi1'
    ],
    'list_type',
    'tscobj'
);

// Add flexform DataStructures
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'tscobj_pi1',
    'FILE:EXT:tscobj/Configuration/FlexForms/flexform_ds_pi1.xml'
);

// Plugin options
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['tscobj_pi1'] = 'layout,select_key,pages,recursive';

// Add flexform fields to plugin options
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['tscobj_pi1'] = 'pi_flexform';
