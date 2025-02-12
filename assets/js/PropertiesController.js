/*!
 * Контроллер представления сетки свойств.
 * Расширение "Элементы итерфейса".
 * Модуль "Справочники".
 * Copyright 2015 Вeб-студия GearMagic. Anton Tivonenko <anton.tivonenko@gmail.com>
 * https://gearmagic.ru/license/
 */

Ext.define('Gm.be.references.elements.PropertiesController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.gm-be-references-elements-properties',

    /**
     * @cfg {null|Ext.window.Window}
     * Окно добавления свойств элементу.
     */
    propertiesWindow: null,

    /**
     * Возвращает сетку свойств.
     * @return {Ext.grid.property.Grid}
     */
    getProperties: () => { return Ext.getCmp('gm-references-elements__properties'); },

    /**
     * Нажатие на кнопку "Удалить всё" панели инструментов.
     * @param {Ext.button.Button} me
     * @param {Event} e Событие.
     * @param {Object} eOpts Параметры слушателя.
     */
    onBtnRemoveProperties: function (me, e, eOpts) {
        me.up('propertygrid').getStore().removeAll();
    },

    /**
     * Нажатие на кнопку "Удалить" панели инструментов.
     * @param {Ext.button.Button} me
     * @param {Event} e Событие.
     * @param {Object} eOpts Параметры слушателя.
     */
    onBtnRemoveProperty: function (me, e, eOpts) {
        let grid = me.up('propertygrid'),
            rows = grid.getSelectionModel().getSelection();

        if (rows.length == 0) {
            Ext.Msg.warning(me.msgMustSelect);
            return;
        }
        grid.removeProperty(rows[0].get('name'));
    },

    /**
     * Нажатие на кнопку "Добавить" панели инструментов.
     * @param {Ext.menu.Item|Ext.button.Button} me
     * @param {Event} e Событие.
     * @param {Object} eOpts Параметры слушателя.
     */
    onBtnShowProperties:  function (me, e, eOpts) {
        if (this.propertiesWindow == null) {
            this.propertiesWindow = Ext.create(me.window);
        }

        this.propertiesWindow.down('form').reset();
        this.propertiesWindow.show();
    },

    /**
     * Нажатие на кнопку "Добавить" окна свойств элемента.
     * @param {Ext.button.Button} me
     * @param {Event} e Событие.
     * @param {Object} eOpts Параметры слушателя.
     */
    onBtnAddProperties: function (me, e, eOpts) {
        let tags  = me.up('form').down('tagfield').getValue(),
            grid = this.getProperties();

        for (property of tags) {
            grid.setProperty(property, null, true);
        }
        me.up('window').hide();
    },

    /**
     * Нажатие на кнопку "Отмена" окна свойств элемента.
     * @param {Ext.button.Button} me
     * @param {Event} e Событие.
      *@param {Object} eOpts Параметры слушателя.
     */
      onBtnCloseWindow: function (me, e, eOpts) {
        me.up('form').reset();
        me.up('window').hide();
    },

    /**
     * Унижчтожает контроллер.
     */
     destroy: function() {
        if (this.propertiesWindow) {
            this.propertiesWindow.destroy();
        }

        this.callParent();
    }
});