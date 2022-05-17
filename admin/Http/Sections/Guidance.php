<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminDisplayFilter;
use AdminForm;
use AdminFormElement;
use AdminSection;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Guidance
 *
 * @property \App\Model\Guidance $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Guidance extends Section
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
    protected $title = 'Руководство';

    
    /**
     * @var string
     */
    protected $alias;

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::image('image_oz')->setLabel('Фото')->setWidth('20%'),
            AdminColumn::link('name_oz')->setLabel('ФИО'),
            AdminColumn::link('category_oz')->setLabel('Категория'),
            AdminColumn::link('created_at')->setLabel('Дата создания'),
            
        ]);
        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Фото, ФИО, Категория появляется после заполнения формы на Узбекском языке</div>')
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
                AdminFormElement::text('title_ru', 'Title'),
                AdminFormElement::text('description_ru', 'Description'),
                AdminFormElement::text('keywords_ru', 'Keywords'),
                AdminFormElement::text('name_ru', 'ФИО'),
                AdminFormElement::textarea('sketch_ru', 'Краткое описание'),
                AdminFormElement::wysiwyg('content_ru', 'Текст'),
                AdminFormElement::text('rank_ru', 'Должность'),
                
        AdminFormElement::select('category_ru', 'Раздел',['УПРАВЛЯЮЩИЕ'=>'УПРАВЛЯЮЩИЕ И ДИРЕКТОРА','ЗАМЕСТИТЕЛИ'=>'ЗАМЕСТИТЕЛИ']),
        AdminFormElement::image('image_ru', 'Фото 16:9 (макс. 1280 × 960 px)'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('name_oz', 'ФИО'),
                AdminFormElement::textarea('sketch_oz', 'Краткое описание'),
                AdminFormElement::wysiwyg('content_oz', 'Текст'),
                AdminFormElement::text('rank_oz', 'Должность'),
                AdminFormElement::select('category_oz', 'Раздел',['УПРАВЛЯЮЩИЕ'=>'УПРАВЛЯЮЩИЕ И ДИРЕКТОРА','ЗАМЕСТИТЕЛИ'=>'ЗАМЕСТИТЕЛИ']),
                AdminFormElement::image('image_oz', 'Фото 16:9 (макс. 1280 × 960 px)'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::text('name_en', 'ФИО'),
                AdminFormElement::textarea('sketch_en', 'Краткое описание'),
                AdminFormElement::wysiwyg('content_en', 'Текст'),
                AdminFormElement::text('rank_en', 'Должность'),
                AdminFormElement::select('category_en', 'Раздел',['УПРАВЛЯЮЩИЕ'=>'УПРАВЛЯЮЩИЕ И ДИРЕКТОРА','ЗАМЕСТИТЕЛИ'=>'ЗАМЕСТИТЕЛИ']),
                AdminFormElement::image('image_en', 'Фото 16:9 (макс. 1280 × 960 px)'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customimage.js', ['admin-default'])
       ->setHtmlAttribute('enctype', 'multipart/form-data');
      
   
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
