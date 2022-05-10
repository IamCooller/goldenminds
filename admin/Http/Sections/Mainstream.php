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
 * Class Mainstream
 *
 * @property \App\Model\Mainstream $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Mainstream extends Section
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
    protected $title = 'Основные направления';


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
                AdminFormElement::text('title_ru', 'Title'),
                AdminFormElement::text('description_ru', 'Description'),
                AdminFormElement::text('keywords_ru', 'Keywords'),
                AdminFormElement::wysiwyg('content_ru', 'Контент'),
                AdminFormElement::wysiwyg('content_design_ru', 'Контент Проектирование'),
                AdminFormElement::wysiwyg('content_economy_ru', 'Контент Расчеты'),
                AdminFormElement::wysiwyg('content_consultation_ru', 'Контент Консультация'),
                AdminFormElement::wysiwyg('content_injener_ru', 'Контент Инженерные изыскания'),
                AdminFormElement::wysiwyg('content_laboratory_ru', 'Контент Лабораторные исследования'),
                AdminFormElement::wysiwyg('content_author_ru', 'Контент Авторский надзор'),
                AdminFormElement::wysiwyg('content_stroy_ru', 'Контент Сопровождение строительства'),
                AdminFormElement::files('file_ru', 'Файл'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::wysiwyg('content_oz', 'Контент'),
                AdminFormElement::wysiwyg('content_design_oz', 'Контент Проектирование'),
                AdminFormElement::wysiwyg('content_economy_oz', 'Контент Расчеты'),
                AdminFormElement::wysiwyg('content_consultation_oz', 'Контент Консультация'),
                AdminFormElement::wysiwyg('content_injener_oz', 'Контент Инженерные изыскания'),
                AdminFormElement::wysiwyg('content_laboratory_oz', 'Контент Лабораторные исследования'),
                AdminFormElement::wysiwyg('content_author_oz', 'Контент Авторский надзор'),
                AdminFormElement::wysiwyg('content_stroy_oz', 'Контент Сопровождение строительства'),
                AdminFormElement::files('file_oz', 'Файл'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::wysiwyg('content_en', 'Контент'),
                AdminFormElement::wysiwyg('content_design_en', 'Контент Проектирование'),
                AdminFormElement::wysiwyg('content_economy_en', 'Контент Расчеты'),
                AdminFormElement::wysiwyg('content_consultation_en', 'Контент Консультация'),
                AdminFormElement::wysiwyg('content_injener_en', 'Контент Инженерные изыскания'),
                AdminFormElement::wysiwyg('content_laboratory_en', 'Контент Лабораторные исследования'),
                AdminFormElement::wysiwyg('content_author_en', 'Контент Авторский надзор'),
                AdminFormElement::wysiwyg('content_stroy_en', 'Контент Сопровождение строительства'),
                AdminFormElement::files('file_en', 'Файл'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customimage.js', ['admin-default'])
       ->addBody([
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
