<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Contact
 *
 * @property \App\Model\ContactMain $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Contact extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Контакты';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-book')->setPriority(1);
    }

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
                AdminFormElement::text('tel1_ru', 'Номер телефона №1'),
                AdminFormElement::text('tel2_ru', 'Номер телефона №2'),
                AdminFormElement::text('email_ru', 'E-mail'),
                AdminFormElement::wysiwyg('text_ru', 'Текст'),
                AdminFormElement::wysiwyg('address_ru', 'Адрес'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_oz', 'Номер телефона №1'),
                AdminFormElement::text('tel2_oz', 'Номер телефона №2'),
                AdminFormElement::text('email_oz', 'E-mail'),
                AdminFormElement::wysiwyg('text_oz', 'Текст'),
                AdminFormElement::wysiwyg('address_oz', 'Адрес'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_en', 'Номер телефона №1'),
                AdminFormElement::text('tel2_en', 'Номер телефона №2'),
                AdminFormElement::text('email_en', 'E-mail'),
                AdminFormElement::wysiwyg('text_en', 'Текст'),
                AdminFormElement::wysiwyg('address_en', 'Адрес'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
       ->addBody([
        AdminFormElement::wysiwyg('map', 'Карта'),
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
