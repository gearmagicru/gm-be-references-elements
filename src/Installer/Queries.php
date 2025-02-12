<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Файл конфигурации Карты SQL-запросов.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

define('ELEMENTS_ASSET_URL', MODULE_BASE_URL . '/gm/gm.be.references.elements/assets/images/elements');

/**
 * Свойства компонента.
 * 
 * @param array $merge
 * 
 * @return array
 */
function componentProperties(array $merge = []): array
{
    return array_merge([
        'anchor' => null, // string, по умолчанию: null. Привязка к размерам контейнера.
        'baseCls' => null, // string, по умолчанию: 'x-component'. Базовый класс CSS, применяемый к компоненту.
        'border' => null, // string, по умолчанию: null. Размер границы для компонента.
        'cls' => null, // string, по умолчанию: ''. Класс CSS, который будет добавлен к компоненту.
        'controller' => null, // string, по умолчанию: null. Псевдоним контроллера компонента.
        'disabled' => false, // bool, по умолчанию: false. Отключить компонент.
        'disabledCls' => null, // string, по умолчанию: 'x-item-disabled'. Класс CSS отключенного компонента. 
        'flex' => null, // int, по умолчанию: null. Flex макета компонента.
        'height' => null, // string, по умолчанию: null. Высота компонента.
        'hidden' => false, // bool, по умолчанию: false. Скрыть компонент.
        'id' => '', // string, по умолчанию: ''. Идентификатор компонента.
        'margin' => null, // string, по умолчанию: null. Граница компонента.
        'maxHeight' => null, // int, по умолчанию: null. Максимальная высота компонента.
        'maxWidth' => null, // int, по умолчанию: null. Максимальная ширина компонента.
        'minHeight' => null, // int, по умолчанию: null. Минимальная высота компонента.
        'minWidth' => null, // int, по умолчанию: null. Минимальная ширина компонента. 
        'overCls' => null, // string, по умолчанию: ''. Класс CSS добавляемый, когда курсор над компонентом.
        'padding' => null, // string, по умолчанию: null. Отступы внтури компонента.
        'scrollable' => null, // bool, по умолчанию: null (true, false, x, y). Компонент с возможностью прокрутки.
        'style' => null, // string, по умолчанию: null. Стиль компонента.
        'ui' => null, // string, по умолчанию: 'default'. Стиль пользовательского интерфейса компонента.
        'uiCls' => null, // array, по умолчанию: []. Имена классов, которые применяются к компоненту.
        'width' => null, // string, по умолчанию: null. Ширина компонента
        'html' => null // string, по умолчанию: ''. HTML, как содержимое компонента.
    ], $merge);
}

/**
 * Свойства базового поля.
 * 
 * @param array $merge
 * 
 * @return array
 */
function baseFieldProperties(array $merge = []): array
{
    return array_merge(componentProperties([
        'autoFitErrors' => true, // bool, по умолчанию: true. Регулировать ширину компонента для места "боковых" сообщений об ошибках.
        'baseBodyCls' => null, // string, по умолчанию: calc. Класс CSS, который будет применен к элементу содержимого body.
        'dirtyCls' => null, // string, по умолчанию: calc. Класс CSS, используемый, когда значение поля некорректно.
        'fieldBodyCls' => null, // string, по умолчанию: ''. Дополнительный класс CSS, который будет применяться к элементу содержимого body в дополнение к baseBodyCls.
        'fieldCls' => null, // string, по умолчанию: 'x-form-field'. Класс CSS по умолчанию для ввода поля.
        'fieldLabel' => null, // string, по умолчанию: undefined. Метка поля.
        'fieldStyle' => null, // string, по умолчанию: undefined. Стиль метки. 
        'focusCls' => null, // string, по умолчанию: true. Класс CSS поля в фокусе.
        'hideLabel' => false, // bool, по умолчанию: false. Скрыть метку.
        'invalidText' => null, // string, по умолчанию: 'The value in this field is invalid'. Текст ошибки, используемый при пометке поля как недействительного.
        'labelAlign' => 'right',  // string, по умолчанию: 'right' ('left', 'top', 'right'). Выравнивание метки относительно поля. 
        'labelClsExtra' => '', // string, по умолчанию: true. Дополнительныый класс CSS элемента метки.
        'labelPad' => 5, // int, по умолчанию: 5. Расстояние в пикселях между fieldLabel и телом поля.
        'labelSeparator' => ':', // string, по умолчанию: ':'. Символ(ы), которые будут вставлены в конец текста метки.
        'labelStyle' => '',  // string, по умолчанию: ''. Стиль метки.
        'labelWidth' => 150, // int, по умолчанию: 100. Ширина метки в пкс.
        'name' => '',  // string, по умолчанию: ''. Атрибут названия поля.
        'readOnly' => false, // bool, по умолчанию: false. Значения поля только для чтения.
        'readOnlyCls' => null, // string, по умолчанию: null. Класс CSS поля в режиме только для чтения.
        'submitValue' => null, // bool, по умолчанию: true. Отправлять значение если поле отключено.
        'tabIndex' => 0, // int, по умолчанию: 0. Порядок фокуса компонента.
        'validateOnBlur' => true, // bool, по умолчанию: true. Проверка значения поля, когда оно теряет фокус.
        'validateOnChange' => true, // bool, по умолчанию: true. Проверка значения поля, при его изменении.
        'validation' => null, // bool, по умолчанию: null. Проверка значения поля. 
        'value' => null, // string, по умолчанию: null. Значение поля.
    ]), $merge);
}

/**
 * Свойства поля.
 * 
 * @param array $merge
 * 
 * @return array
 */
function fieldProperties(array $merge = []): array
{
    return array_merge(baseFieldProperties([
        'disabled' => null, // bool, по умолчанию: false. Отключить поле.
    ]), $merge);
}

/**
 * Свойства текстового поля.
 * 
 * @param array $merge
 * 
 * @return array
 */
function textFieldProperties(array $merge = []): array
{
    return array_merge(fieldProperties([
        'allowBlank' => true, // bool, по умолчанию: true. Значение поля должно быть указано.
        'allowOnlyWhitespace' => true, // bool, по умолчанию: true. Обрезать значение перед проверкой значения на пустоту.
        'blankText' => null, // string, по умолчанию: 'This field is required'. Текст ошибки, отображаемый в случае сбоя проверки allowBlank.
        'disableKeyFilter' => false, // bool, по умолчанию: true. Не отключать фильтрацию нажатий клавиш.
        'editable' => true, // bool, по умолчанию: true. Возможность изменить значение поля.
        'emptyCls' => null, // string, по умолчанию: 'x-form-empty-field'. Класс CSS, который нужно применить к пустому полю для стилизации emptyText.
        'emptyText' => null, // string, по умолчанию: null. Текст по умолчанию для размещения в пустом поле.
        'grow' => false, // bool, по умолчанию: false. Автоматически увеличение и уменьшения поля до своего содержимого.
        'growMax' => null, // int, по умолчанию: 800.  Максимальная ширина поля при автоматическом увилечении.
        'growMin' => null, // int, по умолчанию: 30.  Минимальная ширина поля при автоматическом уменьшении.
        'growAppend' => null, // string, по умолчанию: 'W'. Строка, которая будет добавлена к текущему значению поля для расчета размера целевого поля.
        'maxLength' => null, // int, по умолчанию: calc. Максимальная длина поля ввода, разрешенная проверкой.
        'maxLengthText' => null, // string, по умолчанию: 'The maximum length for this field is {0}'. Текст ошибки, если проверка максимальной длины не удалась.
        'minLength' => null, // int, по умолчанию: calc. Минимальная длина поля ввода, разрешенная проверкой.
        'minLengthText' => null, // string, по умолчанию: 'The minimum length for this field is {0}'. Текст ошибки, если проверка минимальной длины не удалась.
        'regex' => null, // string, по умолчанию: null. Регулярное выражение для проверки поля.
        'regexText' => null, // string, по умолчанию: null. Текст ошибки, если проверка регулярным выраженим не удалась.
        'selectOnFocus' => false, // bool, по умолчанию: false. Автоматический выбор любого существующего текста поля, когда поле получает фокус ввода.
        'validateBlank' => false, // bool, по умолчанию: false. Не проверять пустые значения
        'vtype' => null, // string, по умолчанию: null. Имя типа проверки.
        'vtypeText' => null, // string, по умолчанию: null. Текст ошибки, если проверка выбранным видом не удалась.
    ]), $merge);
}

/**
 * Свойства кнопки.
 * 
 * @param array $merge
 * 
 * @return array
 */
function buttonProperties(array $merge = []): array
{
    return array_merge([
        'allowDepress' => true, // bool, по умолчанию: true. Допускать нажатие нажатой кнопки.
        'arrowAlign' => 'right', // string, по умолчанию: 'small' ('right', 'bottom'). Отображения стрелки кнопки, если кнопка имеет меню.
        'arrowCls' => 'arrow', // string, по умолчанию: 'arrow'. CSS класс внутренней стрелки.
        'arrowVisible' => true, // bool, по умолчанию: true. Показать стрелку кнопки.
        'clickEvent' => null, // string, Событие нажатия кнопки
        'destroyMenu' => null, // bool, по умолчанию: true. Удалять связанное меню при уничтожении кнопки.
        'enableToggle' => false, // bool, по умолчанию: false. Включает переключение нажатых/не нажатых кнопок.
        'glyph' => null, // string. Числовой код символов Юникода, используемый в качестве значка.
        'handleMouseEvents' => true, // bool, по умолчанию: true. Включить подсказки при наведении курсора мыши.
        'handler' => null, // string. Событие нажатия.
        'href' => null, // strnig. URL-адрес открываемый при нажатии.
        'hrefTarget' => '_blank', // string. Целевой атрибут перехода по URL-адресу.
        'icon' => null, // string. URL-адрес значка.
        'iconAlign' => 'left', // string, по умолчанию: 'left' ('right', 'bottom', 'left'). Выравнивание значка.
        'iconCls' => null, // string. CCS класс фона значка. 
        'pressed' => false,  // bool, по умолчанию: true. Кнопка нажата (только для enableToggle = true)
        'preventDefault' => null, // bool, по умолчанию  true. Предотвращает действие по умолчанию при обработке события clickEvent.
        'repeat' => null, // bool, по умолчанию  true. Значение true для повторного запуска события щелчка, когда мышь нажата.
        'scale' => null,  // string, по умолчанию: 'small' ('small', 'medium', 'large). Размер кнопки.
        'showEmptyMenu' => null, // bool, по умолчанию: false. Значение true, чтобы при нажатии этой кнопки принудительно отображалось прикрепленное меню cfg без элементов.
        'tabIndex' => 0, // int, по умолчанию: 0. Порядок фокуса компонента.
        'text' => null, // string. Текст кнопки, который будет использоваться как innerHTML.
        'textAlign' => null, // string, по умолчанию: 'center' ('center', 'left', 'right). Выравнивание текста кнопки.
        'toggleGroup' => null, // string. Группа переключателя.
        'toggleHandler' => null, // string. Функция вызывается при нажатии кнопки, для которой параметр EnableToggle установлен в значение true.
        'tooltip' => null, // string. Подсказка
        'tooltipType' => 'qtip', // string. по умолчанию: 'qtip' ('qtip', 'title).
        'value' => null, // string. Значение
    ], $merge);
}

/**
 * Свойства элемента.
 * 
 * @param string $inherited Имя предка.
 * @param array $properties
 * 
 * @return string
 */
function properties(string $inherited, array $properties = []): string
{
    static $inheritedProps = [];

    if (!isset($inheritedProps[$inherited])) {
        $inheritedProps[$inherited] = $inherited();
    }
    return json_encode(array_merge($inheritedProps[$inherited], $properties));
}

return [
    'drop'   => ['{{reference_elements}}'],
    'create' => [
        '{{reference_elements}}' => function () {
            return "CREATE TABLE `{{reference_elements}}` (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                `type` varchar(100) DEFAULT NULL,
                `name` varchar(100) DEFAULT NULL,
                `icon` varchar(255) DEFAULT NULL,
                `enabled` tinyint(1) unsigned DEFAULT '1',
                `is_field` tinyint(1) unsigned DEFAULT '0',
                `properties` text,
                `_updated_date` datetime DEFAULT NULL,
                `_updated_user` int(11) unsigned DEFAULT NULL,
                `_created_date` datetime DEFAULT NULL,
                `_created_user` int(11) unsigned DEFAULT NULL,
                `_lock` tinyint(1) unsigned DEFAULT '0',
                PRIMARY KEY (`id`)
            ) ENGINE={engine} 
            DEFAULT CHARSET={charset} COLLATE {collate}";
        }
    ],

    'insert' => [
        '{{reference_elements}}' => [
            [ // Вкладка
                'type'       => 'tab',
                'name'       => 'Tab',
                'icon'       => ELEMENTS_ASSET_URL . '/tab.svg',
                'enabled'    => 1,
                'is_field'   => 0,
                'properties' => properties('buttonProperties', [
                    'closable' => true, // bool, по умолчанию: true. Возможность закрыть.
                    'closeText' => 'Close Tab', // string, по умолчанию: 'Close Tab'. Текстовая метка кнопки закрытия.
                    'rotation' => null, // string, по умолчанию: null (0, 1, 2). Вращение текста.
                    'tabPosition ' => 'top',  // string, по умолчанию: 'top' (top', 'right', 'bottom', 'left'). Положение вкладок.
                    'padding' => 10,
                    'title' => ''
                ])
            ],
            [ // Текстовое поле
                'type'       => 'textfield',
                'name'       => 'Text field',
                'icon'       => ELEMENTS_ASSET_URL . '/textfield.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('fieldProperties')
            ],
            [ // Поле времени
                'type'       => 'timefield',
                'name'       => 'Time field',
                'icon'       => ELEMENTS_ASSET_URL . '/timefield.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('textFieldProperties', [
                    'altFormats' => null, // string, по умолчанию: '...'. Форматы даты, разделенных знаком "|".
                    'format' => null, // string. Строковый формат времени.
                    'increment' => 15, // int, по умолчанию: 15. Количество минут между каждым значением времени в списке.
                    'pickerMaxHeight' => null, // int, по умолчанию: 300. Максимальная высота выпадающего списка.
                    'snapToIncrement' => null, // bool, по умолчанию: false. Принятие только значений на границе приращения.
                    'submitFormat' => null, // string, по умолчанию: undefined. Выполнить отправку поля, даже если оно не отключено.
                ])
            ],
            [ // Поле даты
                'type'       => 'datefield',
                'name'       => 'Date field',
                'icon'       => ELEMENTS_ASSET_URL . '/datefield.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('textFieldProperties', [
                    'altFormats' => null, // string, по умолчанию: '...'. Форматы даты, разделенных знаком "|".
                    'disabledDates' => null, // array, по умолчанию: null. Даты, которые необходимо отключить.
                    'disabledDatesText' => null, // string, по умолчанию: 'Disabled'. Текст подсказки, отображаемый, когда дата приходится на отключенную дату.
                    'disabledDays' => null, // array, по умолчанию: null. Дни, которые необходимо отключить.
                    'disabledDaysText' => null, // string, по умолчанию: 'Disabled'. Подсказка, отображаемая, когда дата приходится на отключенный день.
                    'format' => null, // string, по умолчанию: 'm/d/Y'. Строковый формат даты.
                    'showToday' => true, // boolean, по умолчанию: true. Подсвечивать текущую дату.
                    'startDay' => null, // number, по умолчанию: undefined. Индекс дня, с которого должна начаться неделя, отсчитывается от 0.
                ])
            ],
            [ // Поле спиннера
                'type'       => 'spinnerfield',
                'name'       => 'Spinner field',
                'icon'       => ELEMENTS_ASSET_URL . '/spinnerfield.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('textFieldProperties', [
                    'keyNavEnabled' => true, // bool, по умолчанию: true. Навигация кнопками.
                    'mouseWheelEnabled ' => true, // bool, по умолчанию: true. Установк значений колёсиком мыши.
                    'spinDownEnabled' => true, // bool, по умолчанию: true. Кнопка со стрелкой вниз включена.
                    'spinUpEnabled' => true, //  bool, по умолчанию: true. Кнопка со стрелкой вверх включена.                    
                ])
            ],
            [ // Числовое текстовое поле
                'type'       => 'numberfield',
                'name'       => 'Numeric text field',
                'icon'       => ELEMENTS_ASSET_URL . '/numberfield.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('textFieldProperties', [
                    'keyNavEnabled' => true, // bool, по умолчанию: true. Навигация кнопками.
                    'mouseWheelEnabled ' => true, // bool, по умолчанию: true. Установк значений колёсиком мыши.
                    'spinDownEnabled' => true, // bool, по умолчанию: true. Кнопка со стрелкой вниз включена.
                    'spinUpEnabled' => true, //  bool, по умолчанию: true. Кнопка со стрелкой вверх включена.                    
                    'allowDecimals' => true, //  bool, по умолчанию: true. Доступные десятичные значения.
                    'allowExponential' => true, //  bool, по умолчанию: true. Доступные экспоненциальное представление чисел.
                    'autoStripChars' => false, // bool, по умолчанию: false. Автоматическое удаления недопустимых символов из поля.
                    'baseChars' => null, // string, по умолчанию: '0123456789'. Базовый набор символов для оценки как допустимых чисел.
                    'decimalPrecision' => 2, // int, по умолчанию: 2. Максимальная точность отображения после десятичного разделителя.
                    'decimalSeparator' => null, // string, по умолчанию: null. Символ(ы), которые можно использовать в качестве десятичного разделителя.
                    'maxText' => null, // string, по умолчанию: 'The maximum value for this field is {0}'. Текст ошибки, если проверка максимального значения не удалась. 
                    'maxValue' => null, // int, по умолчанию: calc. Максимальное допустимое значение.
                    'minText' => null, // string, по умолчанию: 'The minimum value for this field is {0}'. Текст ошибки, если проверка минимального значения не удалась. 
                    'minValue' => null, // int, по умолчанию: calc. Минимальное допустимое значение.
                    'nanText' => null, // string, по умолчанию: '{0} is not a valid number'. Текст ошибки, если значение не является допустимым числом.
                    'negativeText' => null, // string, по умолчанию: 'The value cannot be negative'. Текст ошибки, если значение является отрицательным. 
                    'step' => 1 // int, по умолчанию: 1. Величина инкримента и декримента значения поля.
                ])
            ],
            [ // Поле загруки файла
                'type'       => 'filefield',
                'name'       => 'File upload field',
                'icon'       => ELEMENTS_ASSET_URL . '/filefield.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('textFieldProperties', [
                    'buttonMargin' => 3, // int, по умолчанию: 3. Расстояние между полем и кнопкой.
                    'buttonOnly' => false, // bool, по умолчанию: false. Отображать только кнопку.
                    'buttonText' => null, // string, по умолчанию: 'Browse...'. Текст кнопки.
                    'clearOnSubmit' => true, //  bool, по умолчанию: true. Очистить значение поля.
                ])
            ],
            [ // Поле области вода
                'type'       => 'textarea',
                'name'       => 'Textarea field',
                'icon'       => ELEMENTS_ASSET_URL . '/textarea.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('textFieldProperties', [
                    'enterIsSpecial' => false, // bool, по умолчанию: false. ENTER как специальная клавиша ввода.
                    'preventScrollbars' => false, // bool, по умолчанию: false. Постоянно показывать полосы прокрутки.
                ])
            ],
            [ // Поле флажка
                'type'       => 'checkbox',
                'name'       => 'Checkbox field',
                'icon'       => ELEMENTS_ASSET_URL . '/checkbox.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('fieldProperties', [
                    'boxLabel ' => null, // string, по умолчанию: null. Текстовая метка, которая появится рядом с флажком.
                    'boxLabelAlign' => 'after', // string, по умолчанию: 'after' ('after', 'before'). Положение текстовой метки относительно флажка.
                    'boxLabelCls' => null, // string, по умолчанию: 'x-form-cb-label'. Стиль текстовой метки.
                    'checked' => true, // bool, по умолчанию: false. Флажок должен отображаться изначально установленным.
                    'checkedCls' => null, // string, по умолчанию: 'x-form-cb-checked'. Класс CSS добавляемый к компоненту, когда он находится в отмеченном состоянии.
                    'inputValue' => 'on', // string, по умолчанию: 'on'. Значение отправляемое формой.
                ])
            ],
            [ // Радиополе
                'type'       => 'radio',
                'name'       => 'Radio field',
                'icon'       => ELEMENTS_ASSET_URL . '/radio.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('fieldProperties', [
                    'boxLabel ' => null, // string, по умолчанию: null. Текстовая метка, которая появится рядом с флажком.
                    'boxLabelAlign' => 'after', // string, по умолчанию: 'after' ('after', 'before'). Положение текстовой метки относительно флажка.
                    'boxLabelCls' => null, // string, по умолчанию: 'x-form-cb-label'. Стиль текстовой метки.
                    'checked' => true, // bool, по умолчанию: false. Флажок должен отображаться изначально установленным.
                    'checkedCls' => null, // string, по умолчанию: 'x-form-cb-checked'. Класс CSS добавляемый к компоненту, когда он находится в отмеченном состоянии.
                    'inputValue' => 'on', // string, по умолчанию: 'on'. Значение отправляемое формой.
                ])
            ],
            [ // Скрытое поле
                'type'       => 'hidden',
                'name'       => 'Hidden field',
                'icon'       => ELEMENTS_ASSET_URL . '/hiddenfield.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('fieldProperties')
            ],
            [ // Легкий HTML-редактор
                'type'       => 'htmleditor',
                'name'       => 'Lightweight HTML Editor',
                'icon'       => ELEMENTS_ASSET_URL . '/htmleditor.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('fieldProperties', [
                    'createLinkText' => null, // string, по умолчанию: 'Please enter the URL for the link:'. Текст по умолчанию для запроса на создание ссылки
                    'defaultButtonUI' => null, // string, по умолчанию: 'default-toolbar'. Пользовательский интерфейс по умолчанию, используемый для панели инструментов.
                    'defaultLinkValue' => null, // string, по умолчанию: 'https://'. Значение по умолчанию для запроса на создание ссылки
                    'defaultValue' => null, // string, по умолчанию: calc. Значение по умолчанию, которое будет введено в редактор для решения проблем с фокусом.
                    'enableAlignments' => true, // bool, по умолчанию: true. Включить кнопки выравнивания по левому, центральному и правому краю.
                    'enableColors' => true, // bool, по умолчанию: true. Включить кнопки цвета.
                    'enableFont' => true, // bool, по умолчанию: true. Включить кнопки шрифта.
                    'enableFontSize' => true, // bool, по умолчанию: true. Включить кнопки размера шрифта.
                    'enableFormat'=> true, // bool, по умолчанию: true. Включить кнопки форматирования текста.
                    'enableLinks' => true, // bool, по умолчанию: true. Включите кнопку создания ссылки.
                    'enableLists' => true, // bool, по умолчанию: true. Включить кнопки маркированного и нумерованного списка.
                    'enableSourceEdit' => true, // bool, по умолчанию: true. Включить кнопку переключения на исходный код.
                    'fontFamilies' => null, // array, по умолчанию: ['Arial', 'Courier New', 'Tahoma', 'Times New Roman', 'Verdana']. Массив доступных шрифтов.
                ])
            ],
            [ // Поле вывода текста
                'type'       => 'displayfield',
                'name'       => 'Display-only text field',
                'icon'       => ELEMENTS_ASSET_URL . '/displayfield.svg',
                'enabled'    => 1,
                'is_field'   => 1,
                'properties' => properties('fieldProperties', [
                    'htmlEncode' => false, // bool, по умолчанию: false. Экранирование HTML в тексте при его рендеринге.
                ])
            ]
        ]
    ],

    'run' => [
        'install'   => ['drop', 'create', 'insert'],
        'uninstall' => ['drop']
    ]
];