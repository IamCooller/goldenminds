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
 * Class Virtual
 *
 * @property \App\Model\Virtual $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Virtual extends Section implements Initializable
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
    protected $title = 'Виртуальная приемная';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-female')->setPriority(1);
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
                AdminFormElement::text('title_ru', 'Title'),
                AdminFormElement::text('description_ru', 'Description'),
                AdminFormElement::text('keywords_ru', 'Keywords'),
               
                AdminFormElement::wysiwyg('content_ru', 'Текст'),
          
                AdminFormElement::text('service_ru', 'Области (вводить через ,)'),
        

            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
              
                AdminFormElement::wysiwyg('content_oz', 'Текст'),
                AdminFormElement::text('service_oz', 'Области (вводить через ,)'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
             
                AdminFormElement::wysiwyg('content_en', 'Текст'),
                AdminFormElement::text('service_en', 'Области (вводить через ,)'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
       ->addBody([
           AdminFormElement::text('count', 'Количество обращений'),
       ])   ->addScript('custom-image', '/customjs/customInputs.js', ['jquery-2.0'])
       ->addScript('jquery-2.0', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');

      
   
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
