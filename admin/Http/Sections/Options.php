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
 * Class Options
 *
 * @property \App\Model\Options $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Options extends Section implements Initializable
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
    protected $title = 'Настройки сайта';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-cog')->setPriority(99);
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
                AdminFormElement::ckeditor('graph_ru', 'График работы'),
                AdminFormElement::ckeditor('address_ru', 'Адрес'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_oz', 'Номер телефона №1'),
                AdminFormElement::text('tel2_oz', 'Номер телефона №2'),
                AdminFormElement::text('email_oz', 'E-mail'),
                AdminFormElement::ckeditor('graph_oz', 'График работы'),
                AdminFormElement::ckeditor('address_oz', 'Адрес'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_en', 'Номер телефона №1'),
                AdminFormElement::text('tel2_en', 'Номер телефона №2'),
                AdminFormElement::text('email_en', 'E-mail'),
                AdminFormElement::ckeditor('graph_en', 'График работы'),
                AdminFormElement::ckeditor('address_en', 'Адрес'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
       ->addBody([
        AdminFormElement::text('email_form', 'E-mail для форм'),
        AdminFormElement::text('emailVac', 'E-mail для вакансий'),
        AdminFormElement::textarea('google_analyt', 'Google Analytic'),
        AdminFormElement::textarea('nip', 'Национальной информационно-поисковая система www.uz'),
        AdminFormElement::textarea('yandex_met', 'Яндекс.Метрика'),
        AdminFormElement::ckeditor('map', 'Карта'),
        AdminFormElement::text('facebook', 'Facebook'),
        AdminFormElement::text('telegram', 'Telegram'),
        AdminFormElement::text('linkedin', 'Linkedin'),
        AdminFormElement::text('youtube', 'Youtube'),
       ]);

      
   
    return $form;



    
    }
}
