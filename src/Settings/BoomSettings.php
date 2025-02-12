<?php
/**
 * Виджет веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\References\Elements\Settings;

use Gm\Panel\Helper\ExtCombo;
use Gm\Panel\Widget\ShortcodeSettingsWindow;

/**
 * Настройки шортокда галереи "LightGallery".
 * 
 * Создатель (creator) виджета {@see \Gm\Backend\Marketplace\WidgetManager\Extension}.
 * 
 * @link https://www.lightgalleryjs.com/docs/settings/
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Widget\LightGallery\Settings
 * @since 1.0
 */
class BoomSettings extends ShortcodeSettingsWindow
{
    /**
     * {@inheritdoc}
     */
    protected function init(): void
    {
        parent::init();

        // панель формы (Gm.view.form.Panel GmJS)
        $this->form->bodyPadding = 10;
        $this->form->autoScroll = true;
        $this->form->items = $this->getItems();
        $this->form->defaults = [
            'labelWidth' => 250,
            'labelAlign' => 'right'
        ];

        // окно компонента (Ext.window.Window Sencha ExtJS)
        $this->title    = $this->creator->t('{shortcodesettings.title}');
        $this->titleTpl = $this->title;
        $this->width = 700;
        $this->height = 800;
        $this->resizable = false;
        $this->responsiveConfig = [
            'height < 900' => ['height' => '99%'],
            'width < 640' => ['width' => '99%'],
        ];
        $this->shortcodeTpl = '[boom {0}]';
    }

    /**
     * {@inheritdoc}
     */
    protected function getItems(): array
    {
        return [
            ExtCombo::remote('#Media gallery album', 'id', [
                'proxy' => [
                    'url' =>  ['media-gallery/trigger/combo', 'backend'],
                    'extraParams' => [
                        'combo' => 'gallery',
                        'noneRow' => 0
                    ]
                ]
            ], [
                'allowBlank' => false
            ]),
            [
                'xtype'    => 'fieldset',
                'title'    => '#Control',
                'defaults' => [
                    'labelWidth' => 290,
                    'labelAlign' => 'right',
                ],
                'items' => [
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'keyPress',
                        'fieldLabel' => '#Enable keyboard navigation',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'escKey',
                        'fieldLabel' => '#Enabled key «Esc»',
                        'boxLabel'   => '#close the gallery by pressing the «Esc» key',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'enableSwipe',
                        'fieldLabel' => '#Enable swipe',
                        'boxLabel'   => '#enables swipe support for touch devices',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'enableDrag',
                        'fieldLabel' => '#Enable drag',
                        'boxLabel'   => '#enables desktop mouse drag support',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'closeOnTap',
                        'fieldLabel' => '#Close on tap',
                        'boxLabel'   => '#allows clicks on black area to close gallery',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'resetScrollPosition',
                        'fieldLabel' => '#Reset scroll position',
                        'boxLabel'   => '#reset to previous scrollPosition when lightGallery is closed',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'mousewheel',
                        'fieldLabel' => '#Enable mouse wheel',
                        'boxLabel'   => '#ability to navigate to next/prev slides on mousewheel',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ]
                ]
            ],
            [
                'xtype'    => 'fieldset',
                'title'    => '#Control interface',
                'defaults' => [
                    'labelWidth' => 290,
                    'labelAlign' => 'right',
                ],
                'items' => [
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'download',
                        'fieldLabel' => '#Allows to download',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'hideControlOnEnd',
                        'fieldLabel' => '#Hide prev/next button',
                        'boxLabel'   => '#applies only to first/last image',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => false
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'closable',
                        'fieldLabel' => '#Allows to close the gallery',
                        'boxLabel'   => '#if false user won\'t be able to close the gallery at all',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'counter',
                        'fieldLabel' => '#Show counter',
                        'boxLabel'   => '#whether to show total number of images and index number of currently displayed image',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'controls',
                        'fieldLabel' => '#Show controls',
                        'boxLabel'   => '#if false, prev/next buttons will not be displayed',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'showMaximizeIcon',
                        'fieldLabel' => '#Show maximize icon',
                        'boxLabel'   => '#useful for creating inline galleries',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => false
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'showCloseIcon',
                        'fieldLabel' => '#Show close icon',
                        'boxLabel'   => '#if false, close button won\'t be displayed',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ],
                    [
                        'xtype'      => 'checkbox',
                        'ui'         => 'switch',
                        'name'       => 'loop',
                        'fieldLabel' => '#Loop',
                        'boxLabel'   => '#enable the ability to return to the beginning of the gallery from the last slide',
                        'cls'        => 'gm-wd-lightgallery__checkbox',
                        'inputValue' => 1,
                        'checked'    => true
                    ]
                ]
            ],
            [
                'xtype'    => 'fieldset',
                'title'    => '#Gallery size',
                'defaults' => [
                    'xtype'      => 'textfield',
                    'labelWidth' => 150,
                    'labelAlign' => 'right',
                    'width'      => 250,
                    'emptyText'  => '100%'
                ],
                'items' => [
                    [
                        'name'       => 'width',
                        'fieldLabel' => '#Width, px, %',
                        'value'      => '100%',
                        'allowBlank' => false
                    ],
                    [
                        'name'       => 'height',
                        'fieldLabel' => '#Height, px, %',
                        'value'      => '100%',
                        'allowBlank' => false
                    ]
                ]
            ]
        ];
    }
}