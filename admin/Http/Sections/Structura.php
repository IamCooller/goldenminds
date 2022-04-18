<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Structura
 *
 * @property \App\Model\Structura $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Structura extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = true;

    /**
     * @var string
     */
    protected $title = 'Структура';


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
 

        return $this->fireEdit(1);


    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {

        $tabs = AdminDisplay::tabbed();


        $tabs->setTabs(function ($id) {
            $tabsRU = [];
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('image_ru', 'Изображение'),
                AdminFormElement::text('link_ru', 'Ссылка'),
                AdminFormElement::wysiwyg('tabs_ru', 'Таблица'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('image_oz', 'Изображение'),
                AdminFormElement::text('link_oz', 'Ссылка'),
                AdminFormElement::wysiwyg('tabs_oz', 'Таблица'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('image_en', 'Изображение'),
                AdminFormElement::text('link_en', 'Ссылка'),
                AdminFormElement::wysiwyg('tabs_en', 'Таблица'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ]);
   
    return $form;
    
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }
}
