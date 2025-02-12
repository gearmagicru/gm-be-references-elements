<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\References\Elements\Model;

use Gm\Mvc\Module\BaseModule;
use Gm\Panel\Data\Model\GridModel;

/**
 * Модель данных спииска элементов интерфейса.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\References\Elements\Model
 * @since 1.0
 */
class Grid extends GridModel
{
    /**
     * {@inheritdoc}
     * 
     * @var BaseModule|\Gm\Backend\References\Elements\Extension
     */
    public BaseModule $module;

    /**
     * Если элемент не имеет значка.
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
            'tableName' => '{{reference_elements}}',
            'primaryKey' => 'id',
            'useAudit'   => true,
            'order'      => ['name' => 'ASC'],
            'fields'     => [
                ['type'], // тип
                ['name'], // описание
                ['nameLo'],
                ['icon'], // значок
                ['enabled'], // доступность
                ['is_field', 'alias' => 'isField'], // доступность
                ['properties'], // свойства
            ],
            'resetIncrements' => ['{{reference_elements}}']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        parent::init();

        $this->noneIcon = $this->module->getNoneIcon();
        $this
            ->on(self::EVENT_AFTER_DELETE, function ($someRecords, $result, $message) {
                // всплывающие сообщение
                $this->response()
                    ->meta
                        ->cmdPopupMsg($message['message'], $message['title'], $message['type']);
                /** @var \Gm\Panel\Controller\GridController $controller */
                $controller = $this->controller();
                // обновить список
                $controller->cmdReloadGrid();
            });
    }

    /**
     * {@inheritdoc}
     */
    public function prepareRow(array &$row): void
    {
        // заголовок контекстного меню записи
        $row['popupMenuTitle'] = $row['nameLo'];
    }

    /**
     * {@inheritdoc}
     */
    public function fetchRow(array $row): array
    {
        if ($row['name']) {
            $row['nameLo'] = $this->module->t($row['name']);
        }

        // если нет значка
        if (empty($row['icon'])) {
            $row['icon'] = $this->noneIcon;
        }
        return $row;
    }
}
