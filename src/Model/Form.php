<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\References\Elements\Model;

use Gm\Panel\Data\Model\FormModel;

/**
 * Модель данных профиля элемента интерфейса.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\References\Elements\Model
 * @since 1.0
 */
class Form extends FormModel
{
    /**
     * {@inheritdoc}
     */
    public function getDataManagerConfig(): array
    {
        return [
            'tableName' => '{{reference_elements}}',
            'primaryKey' => 'id',
            'useAudit'   => true,
            'fields'     => [
                ['id'],
                ['type'], // тип
                ['name'], // описание
                ['icon'], // значок
                ['enabled'], // доступность
                ['is_field', 'alias' => 'isField'], // доступность
                ['properties'] // свойства
            ],
            // правила форматирования полей
            'formatterRules' => [
                [['enabled', 'isField'], 'logic']
            ]
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        parent::init();

        $this
            ->on(self::EVENT_AFTER_SAVE, function ($isInsert, $columns, $result, $message) {
                /** @var \Gm\Panel\Controller\GridController $controller */
                $controller = $this->controller();
                // всплывающие сообщение
                $this->response()
                    ->meta
                        ->cmdPopupMsg($message['message'], $message['title'], $message['type']);
                // обновить список
                $controller->cmdReloadGrid();
            })
            ->on(self::EVENT_AFTER_DELETE, function ($result, $message) {
                /** @var \Gm\Panel\Controller\GridController $controller */
                $controller = $this->controller();
                // всплывающие сообщение
                $this->response()
                    ->meta
                        ->cmdPopupMsg($message['message'], $message['title'], $message['type']);
                // обновить список
                $controller->cmdReloadGrid();
            });
    }
}
