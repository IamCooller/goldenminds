<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Form\FormElements;
use App\Model\Forms\FormButton;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use AdminFormButton;
/**
 * Class PhotoGallery
 *
 * @property \App\Model\PhotoGallery $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class PhotoGallery extends Section
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
    protected $title = 'Фотогалерея';


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
 

        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::image('image')->setLabel('Фото'),
            AdminColumn::link('title_oz')->setLabel('Заголовок'),
            AdminColumn::link('created_at')->setLabel('Дата создания')
        ]);
        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Заголовок появляется после заполнения формы на Узбекском языке</div>')
        ->setPlacement('card.footer');
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
            AdminFormElement::files('images_ru', 'Изображения 16:9 (макс. 1280 × 960 px)'),
            ])
            )->setLabel('RU');

            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Заголовок'),
                AdminFormElement::image('image_oz', 'Главное изображение 16:9 (макс. 1280 × 960 px)'),
                AdminFormElement::files('images_oz', 'Изображения 16:9 (макс. 1280 × 960 px)'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Заголовок'),
                AdminFormElement::image('image_en', 'Главное изображение 16:9 (макс. 1280 × 960 px)'),
                AdminFormElement::files('images_en', 'Изображения 16:9 (макс. 1280 × 960 px)'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });


       

        

        
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])->addBody([
            AdminFormElement::date('data', 'Дата')->required(),
            new  FormElements([
                ('<div class="alert alert-danger mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Перед сохранением проверьте все поля! Заголовок обязателен!</div>')
            ])
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
    public function onDelete($id)
    {
        
    }
}
