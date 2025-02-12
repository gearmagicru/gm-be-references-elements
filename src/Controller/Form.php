<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\References\Elements\Controller;

use Gm;
use Gm\Mvc\Module\BaseModule;
use Gm\Panel\Widget\EditWindow;
use Gm\Panel\Controller\FormController;

/**
 * Контроллер формы элемента интерфейса.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\References\Elements\Controller
 * @since 1.0
 */
class Form extends FormController
{
    /**
     * {@inheritdoc}
     * 
     * @var BaseModule|\Gm\Backend\Elements\Desk\Extension
     */
    public BaseModule $module;

    /**
     * Возвращает все свойства элементов интерфейса.
     * 
     * @return array
     */
    protected function getSourceConfig(): array
    {
        $config = $tags = [];

        /** @var null|\Gm\Backend\References\Properties\Extension $extension */
        $extension = Gm::$app->extensions->create('gm.be.references.properties');
        if ($extension) {
            /** @var null|\Gm\Backend\References\Properties\Model\Property $properties */
            $properties = $extension->getModel('Property');
            if ($properties) {
                $rows = $properties->fetchAll();
                foreach ($rows as $row) {
                    $property = $row['property'];
                    $config[$property] = [
                        'displayName' => $property,
                        'tooltip'     => $extension->t($row['name'] ?? $property),
                        'type'        => $row['type'] ?? 'string',
                        'editor'      => empty($row['editor']) ? null : json_decode($row['editor'])
                    ];

                    $tags[] = [$property, $property];
                }
            }
        }
        return [$config, $tags];
    }

    /**
     * {@inheritdoc}
     */
    public function createWidget(): EditWindow
    {
        /** @var EditWindow $window */
        $window = parent::createWidget();

        /** @var array $sourceConfig */
        $sourceConfig = $this->getSourceConfig();

        // панель формы (Gm.view.form.Panel GmJS)
        $window->form->router->route = $this->module->route('/form');
        $window->form->loadJSONFile('/form', 'items', [
            '@sourceConfig' => $sourceConfig[0],
            '@tags'         => $sourceConfig[1]
            
        ]);

        // окно компонента (Ext.window.Window Sencha ExtJS)
        $window->width = 500;
        $window->height = 600;
        $window->responsiveConfig = [
            'height < 600' => ['height' => '99%'],
        ];
        $window->resizable = false;
        $window->layout = 'fit';
        $window
            ->setNamespaceJS('Gm.be.references.elements')
            ->addRequire('Gm.be.references.elements.PropertiesController')
            ->addRequire('Gm.view.form.field.Field')
            ->addRequire('Gm.view.grid.property.Grid');
        return $window;
    }
}
