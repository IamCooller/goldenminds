<?php

namespace Admin\Http\Sections;
use AdminColumnEditable;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class News2
 *
 * @property \App\Model\News2 $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class News2 extends Section
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
    protected $title = 'Новости';

    /**
     * @var string
     */
    protected $alias = 'news/v2';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-danger');
        $display->setOrder([[1, 'desc']]);

        $display->setColumns([
            
            AdminColumn::link('title_oz', 'Заголовок'),
            AdminColumn::datetime('date_oz', 'Дата')->setFormat('d.m.Y')->setWidth('150px'),
           /*  AdminColumnEditable::checkbox('published', 'Публикация'), */
            AdminColumn::custom('Публикация', function (\App\Model\News2 $model) {
                return $model->published ? '<i class="fa fa-check"></i>' : '<i class="fa fa-minus"></i>';
            })->setWidth('50px')->setHtmlAttribute('class', 'text-center')->setOrderable(false),
        ]);
        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Текст появляется после заполнения формы на Узбекском языке</div>')
        ->setPlacement('card.footer');
        
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
                AdminFormElement::text('title_ru', 'Title'),
                AdminFormElement::text('description_ru', 'Description'),
                AdminFormElement::text('keywords_ru', 'Keywords'),
                AdminFormElement::text('name_ru', 'Заголовок'),
                AdminFormElement::wysiwyg('content_ru', 'Текст'),
                AdminFormElement::date('date_ru', 'Дата')->setFormat('d-m-Y'),
                AdminFormElement::image('image_ru', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->setView(view('admin.custom.image')),
                AdminFormElement::images('images_ru', 'Дополнительные изображения 16:9 (макс. 1280 × 960 px)'),
                AdminFormElement::text('author_ru', 'Автор'),  
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('name_oz', 'Заголовок'),
                AdminFormElement::wysiwyg('content_oz', 'Текст'),
                AdminFormElement::date('date_oz', 'Дата')->setFormat('d-m-Y'),
                AdminFormElement::image('image_oz', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->setView(view('admin.custom.image')),
                AdminFormElement::images('images_oz', 'Дополнительные изображения 16:9 (макс. 1280 × 960 px)'),
                AdminFormElement::text('author_oz', 'Автор'),  
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::text('name_en', 'Заголовок'),
                AdminFormElement::wysiwyg('content_en', 'Текст'),
                AdminFormElement::date('date_en', 'Дата')->setFormat('d-m-Y'),
                AdminFormElement::image('image_en', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->setView(view('admin.custom.image')),
                AdminFormElement::images('images_en', 'Дополнительные изображения 16:9 (макс. 1280 × 960 px)'),
                AdminFormElement::text('author_en', 'Автор'),  
            ]))->setLabel('EN'); 
            return $tabsRU;
        });


       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customimage.js', ['admin-default'])
       ->addBody([
        
           AdminFormElement::checkbox('published', 'Публикация'),
     
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
