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
 * Class NewsOptions
 *
 * @property \App\Model\NewsOptions $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class NewsOptions extends Section
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
    protected $title = 'Настройки Пресс-центра';

   
    

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
                AdminFormElement::text('title_ru', 'Заголовок'),
                AdminFormElement::text('description_ru', 'Описание'),
                AdminFormElement::text('keywords_ru', 'Ключевые слова'),
                AdminFormElement::image('image_ru', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->setView(view('admin.custom.image')),

                AdminFormElement::text('rank_ru', 'Должность'),

                AdminFormElement::wysiwyg('content_ru', 'Контент'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Заголовок'),
                AdminFormElement::text('description_oz', 'Описание'),
                AdminFormElement::text('keywords_oz', 'Ключевые слова'), 
                AdminFormElement::image('image_oz', 'Фото'),
                AdminFormElement::text('rank_oz', 'Должность'),
                AdminFormElement::wysiwyg('content_oz', 'Контент'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Заголовок'),
                AdminFormElement::text('description_en', 'Описание'),
                AdminFormElement::text('keywords_en', 'Ключевые слова'),
                AdminFormElement::image('image_en', 'Фото'),
                AdminFormElement::text('rank_en', 'Должность'),
                AdminFormElement::wysiwyg('content_en', 'Контент'),
                
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])  ->addScript('custom-image', '/customjs/customimage.js', ['admin-default']);

      
   
    return $form;



    
    }
}
