<?php
/**
 * Этот файл является частью модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\References\Elements\Controller;

use Gm\Panel\Controller\ComboTriggerController;

/**
 * Контроллер выпадающего списка.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\References\Elements\Controller
 * @since 1.0
 */
class Trigger extends ComboTriggerController
{
    /**
     * {@inheritdoc}
     */
    protected array $triggerNames = [
        'elements' => 'ElementCombo'
    ];
}
