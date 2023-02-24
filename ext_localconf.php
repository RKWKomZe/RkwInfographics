<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {

        //=================================================================
        // Configure Plugin
        //=================================================================
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.RkwInfographics',
            'main',
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
            'title',
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
            'cover',
            array(
                'Infographics' => 'cover'
            ),
            // non-cacheable actions
            array(
                'Infographics' => ''
            )
        );

    },
    $_EXTKEY
);
