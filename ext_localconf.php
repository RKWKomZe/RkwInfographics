<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {

        //=================================================================
        // Configure Plugin
        //=================================================================
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.RkwInfographics',
            'Main',
            [
                'Infographics' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Infographics' => 'list, show'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.' . $extKey,
            'Title',
            array(
                'Infographics' => 'title'
            ),
            // non-cacheable actions
            array(
                'Infographics' => ''
            )
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.' . $extKey,
            'Cover',
            array(
                'Infographics' => 'cover'
            ),
            // non-cacheable actions
            array(
                'Infographics' => ''
            )
        );

    },
    'rkw_infographics'
);
