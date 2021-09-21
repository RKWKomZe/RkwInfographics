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
                'Infographics' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Infographics' => ''
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
                'Infographics' => ''
            )
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.' . $extKey,
            'Infographiccover',
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
