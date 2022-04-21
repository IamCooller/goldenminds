<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use App\Http\Requests\ArticleRequest;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\Delete;
use SleepingOwl\Admin\Form\Buttons\Cancel;


use AdminFormButton;
use SleepingOwl\Admin\Section;
/**
 * Class VideoGallery
 *
 * @property \App\Model\VideoGallery $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class VideoGallery extends Section
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
    protected $title = 'Видеогалерея';


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
 

        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::image('image')->setLabel('Фото'),
            AdminColumn::link('title')->setLabel('Заголовок'),
            AdminColumn::link('created_at')->setLabel('Дата создания')
        ]);

        $display->getColumns()->getControlColumn();
      
        $display->paginate(15);
        return $display;


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
            AdminFormElement::image('image_ru', 'Главное изображение 16:9 (макс. 1280 × 960 px)'),

            AdminFormElement::date('date_ru', 'Дата')->setFormat('d.m.Y'),

            AdminFormElement::text('images_ru', 'ID Youtube видео (вводить через ,)'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Заголовок'),
                AdminFormElement::image('image_oz', 'Главное изображение 16:9 (макс. 1280 × 960 px)'),
    
                AdminFormElement::date('date_oz', 'Дата')->setFormat('d.m.Y'),
    
                AdminFormElement::text('images_oz', 'ID Youtube видео (вводить через ,)'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Заголовок'),
                AdminFormElement::image('image_en', 'Главное изображение 16:9 (макс. 1280 × 960 px)'),
    
                AdminFormElement::date('date_en', 'Дата')->setFormat('d.m.Y'),
    
                AdminFormElement::text('images_en', 'ID Youtube видео (вводить через ,)'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customInputs.js', ['jquery-2.0'])
        ->addScript('jquery-2.0', 'https://code.jquery.com/jquery-3.2.1.slim.min.js')
       ->addBody([
         
       ]);
      
   
    return $form;
       

        
     
    }

    public function onDelete($id)
    {
        // todo: remove if unused
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null, '');
    }
}
