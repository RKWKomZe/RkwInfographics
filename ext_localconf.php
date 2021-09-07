<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {

        //=================================================================
        // Configure Plugin
        //=================================================================
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.RkwInfographics',
            'Infographics',
            [
                'Infographics' => 'list'
            ],
            // non-cacheable actions
            [
                'Infographics' => 'list'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.' . $extKey,
            'Infographictitle',
            array(
                'Infographics' => 'title'
            ),
            // non-cacheable actions
            array(
                'Infographics' => 'title'
            )
        );

    },
    $_EXTKEY
);
