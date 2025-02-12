<?php
/**
 * Этот файл является частью модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\References\Elements\Model;

use Gm\Mvc\Module\BaseModule;
use Gm\Panel\Data\Model\Combo\ComboModel;

/**
 * Модель данных выпадающего списка элементов интерфейса.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\References\Elements\Model
 * @since 1.0
 */
class ElementCombo extends ComboModel
{
    /**
     * {@inheritdoc}
     * 
     * @var BaseModule|\Gm\Backend\References\Elements\Extension
     */
    public BaseModule $module;

    /**
     * Значок по умолчанию.
     * 
     * @var string
     */
    protected string $noneIcon;

    /**
     * {@inheritdoc}
     */
    public function getDataManagerConfig(): array
    {
        return [
            'tableName'  => '{{reference_elements}}',
            'primaryKey' => 'id',
            'searchBy'   => 'name',
            'order'      => ['name' => 'ASC'],
            'fields'     => [
                ['id'],
                ['type'],
                ['icon'],
                ['properties'],
                ['is_field']
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        parent::init();

        $this->noneIcon = $this->module->getNoneIcon();
    }

    /**
     * {@inheritdoc}
     */
    public function afterFetchRow(array $row, array &$rows): void
    {
        /** @var string $name Имя элемента */
        $name = $row[$this->dataManager->searchBy];
        $name = $this->module->t($name);

        $rows[] = [
            $row[$this->dataManager->primaryKey], 
            $name, 
            $row['icon'] ?: $this->noneIcon, 
            $row['properties'] ?: [],
            $row['type'],
            $row['is_field']
        ];
    }
}