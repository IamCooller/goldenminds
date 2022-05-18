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
                AdminFormElement::file('blogo_ru', 'Логотип'),
                AdminFormElement::file('slogo_ru', 'Мини логотип'),

                AdminFormElement::text('popupGerbTitle_ru', 'Попап Герб Заголовок'),
                AdminFormElement::image('popupGerbImage_ru', 'Попап Герб изображение'),
                AdminFormElement::wysiwyg('popupGerb_ru', 'Попап Герб Текст'),
    
                AdminFormElement::text('popupFlagTitle_ru', 'Попап Флаг Заголовок'),
                AdminFormElement::image('popupFlagImage_ru', 'Попап Флаг изображение'),
                AdminFormElement::wysiwyg('popupFlag_ru', 'Попап Флаг Текст'),
                
                AdminFormElement::text('popupGimnTitle_ru', 'Попап Гимн Заголовок'),
                AdminFormElement::image('popupGimnImage_ru', 'Попап Гимн изображение'),
                AdminFormElement::wysiwyg('popupGimn_ru', 'Попап Гимн Текст'),
           
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_oz', 'Номер телефона №1'),
                AdminFormElement::text('tel2_oz', 'Номер телефона №2'),
                AdminFormElement::text('email_oz', 'E-mail'),
                AdminFormElement::ckeditor('graph_oz', 'График работы'),
                AdminFormElement::ckeditor('address_oz', 'Адрес'),
                AdminFormElement::file('blogo_oz', 'Логотип'),
                AdminFormElement::file('slogo_oz', 'Мини логотип'),

                AdminFormElement::text('popupGerbTitle_oz', 'Попап Герб Заголовок'),
                AdminFormElement::image('popupGerbImage_oz', 'Попап Герб изображение'),
                AdminFormElement::wysiwyg('popupGerb_oz', 'Попап Герб Текст'),

                AdminFormElement::text('popupFlagTitle_oz', 'Попап Флаг Заголовок'),
                AdminFormElement::image('popupFlagImage_oz', 'Попап Флаг изображение'),
                AdminFormElement::wysiwyg('popupFlag_oz', 'Попап Флаг Текст'),

                AdminFormElement::text('popupGimnTitle_oz', 'Попап Гимн Заголовок'),
                AdminFormElement::image('popupGimnImage_oz', 'Попап Гимн изображение'),
                AdminFormElement::wysiwyg('popupGimn_oz', 'Попап Гимн Текст'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('tel1_en', 'Номер телефона №1'),
                AdminFormElement::text('tel2_en', 'Номер телефона №2'),
                AdminFormElement::text('email_en', 'E-mail'),
                AdminFormElement::ckeditor('graph_en', 'График работы'),
                AdminFormElement::ckeditor('address_en', 'Адрес'),
                AdminFormElement::file('blogo_en', 'Логотип'),
                AdminFormElement::file('slogo_en', 'Мини логотип'),

                AdminFormElement::text('popupGerbTitle_en', 'Попап Герб Заголовок'),
                AdminFormElement::image('popupGerbImage_en', 'Попап Герб изображение'),
                AdminFormElement::wysiwyg('popupGerb_en', 'Попап Герб Текст'),

                AdminFormElement::text('popupFlagTitle_en', 'Попап Флаг Заголовок'),
                AdminFormElement::image('popupFlagImage_en', 'Попап Флаг изображение'),
                AdminFormElement::wysiwyg('popupFlag_en', 'Попап Флаг Текст'),

                AdminFormElement::text('popupGimnTitle_en', 'Попап Гимн Заголовок'),
                AdminFormElement::image('popupGimnImage_en', 'Попап Гимн изображение'),
                AdminFormElement::wysiwyg('popupGimn_en', 'Попап Гимн Текст'),
                
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
