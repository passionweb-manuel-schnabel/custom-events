<?php

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'CustomEvent',
    'EnrichProductData',
    [
        \Passionweb\CustomEvent\Controller\ProductController::class => 'event'
    ],
    // non-cacheable actions
    [
        \Passionweb\CustomEvent\Controller\ProductController::class => 'event',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        enrichproductdata {
                            iconIdentifier = enrich-product-data
                            title = LLL:EXT:custom_event/Resources/Private/Language/locallang_db.xlf:plugin_enrichproductdata.name
                            description = LLL:EXT:custom_event/Resources/Private/Language/locallang_db.xlf:plugin_enrichproductdata.description
                            tt_content_defValues {
                                CType = list
                                list_type = customevent_enrichproductdata
                            }
                        }
                    }
                    show = *
                }
           }'
);
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$iconRegistry->registerIcon(
    'enrich-product-data',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:custom_event/Resources/Public/Icons/Extension.png']
);
