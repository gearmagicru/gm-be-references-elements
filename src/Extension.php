<?php
/**
 * Расширение модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\References\Elements;

/**
 * Расширение "Элементы интерфейса".
 * 
 * Элементы интерфейса Панели управления.
 * 
 * Расширение принадлежит модулю "Справочники".
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\References\Elements
 * @since 1.0
 */
class Extension extends \Gm\Panel\Extension\Extension
{
    /**
     * {@inheritdoc}
     */
    public string $id = 'gm.be.references.elements';

    /**
     * {@inheritdoc}
     */
    public string $defaultController = 'grid';

    /**
     * Возвращает значок по умолчанию для элемента.
     * 
     * @return string
     */
    public function getNoneIcon(): string
    {
        return $this->getAssetsUrl() . '/images/elements/none.svg';
    }
}