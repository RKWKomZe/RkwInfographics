<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:rkw_infographics/Resources/Private/Language/locallang_db.xlf:tx_rkwinfographics_domain_model_infographic',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title, image_teaser, image_detail, image_social, download',
        'iconfile' => 'EXT:rkw_infographics/Resources/Public/Icons/tx_rkwinfographics_domain_model_infographic.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, image_teaser, image_detail, image_social, download',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, image_teaser, image_detail, image_social, download, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [

        'sys_language_uid' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0]
                ],
                'default' => 0
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_rkwinfographics_domain_model_infographic',
                'foreign_table_where' => 'AND tx_rkwinfographics_domain_model_infographic.pid=###CURRENT_PID### AND tx_rkwinfographics_domain_model_infographic.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'hidden' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'starttime' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rkw_infographics/Resources/Private/Language/locallang_db.xlf:tx_rkwinfographics_domain_model_infographic.title',
            'config' => [
                'type' => 'input',
                'size' => 15,
                'eval' => 'trim,required'
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rkw_infographics/Resources/Private/Language/locallang_db.xlf:tx_rkwinfographics_domain_model_infographic.description',
            'config' => [
                'type' => 'text',
                'rows' => 42,
                'fieldControl'  => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'enableRichtext' => true,
            ],
        ],
        'image_teaser' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rkw_infographics/Resources/Private/Language/locallang_db.xlf:tx_rkwinfographics_domain_model_infographic.image_teaser',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image_teaser',
                ['maxitems' => 1],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'image_detail' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rkw_infographics/Resources/Private/Language/locallang_db.xlf:tx_rkwinfographics_domain_model_infographic.image_detail',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image_detail',
                ['maxitems' => 1],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'image_social' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rkw_infographics/Resources/Private/Language/locallang_db.xlf:tx_rkwinfographics_domain_model_infographic.image_social',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image_social',
                ['maxitems' => 1],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],

        'download' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:rkw_infographics/Resources/Private/Language/locallang_db.xlf:tx_rkwinfographics_domain_model_infographic.download',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'download',
                ['maxitems' => 1],
                'doc,docx,docm,xls,xlsx,pdf,zip'
            ),
        ],
    ]
];

