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
 * Class Departament
 *
 * @property \App\Model\Departament $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Departament extends Section
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
    protected $title = 'Отделы';

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
            AdminColumn::image('image_oz')->setLabel('Фото')->setWidth('30%'),
            AdminColumn::link('content_oz')->setLabel('Отдел')->setWidth('50%'),
            AdminColumn::link('created_at')->setLabel('Дата создания')->setWidth('20%'),
        ]);
        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Фото и Отдел появляется после заполнения формы на Узбекском языке</div>')
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
                AdminFormElement::text('name_ru', 'Отдел'),
                AdminFormElement::text('content_ru', 'Заголовок'),
                AdminFormElement::text('subname_ru', 'Подзаголовок'),
                AdminFormElement::wysiwyg('task_ru', 'Задачи'),
                AdminFormElement::wysiwyg('function_ru', 'Функции'),
                AdminFormElement::image('image_ru', 'Фото 16:9 (макс. 1280 × 960 px)'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('name_oz', 'Отдел'),
                AdminFormElement::text('content_oz', 'Заголовок'),
                AdminFormElement::text('subname_oz', 'Подзаголовок'),
                AdminFormElement::wysiwyg('task_oz', 'Задачи'),
                AdminFormElement::wysiwyg('function_oz', 'Функции'),
                AdminFormElement::image('image_oz', 'Фото 16:9 (макс. 1280 × 960 px)')
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::text('name_en', 'Отдел'),
                AdminFormElement::text('content_en', 'Заголовок'),
                AdminFormElement::text('subname_en', 'Подзаголовок'),
                AdminFormElement::wysiwyg('task_en', 'Задачи'),
                AdminFormElement::wysiwyg('function_en', 'Функции'),
                AdminFormElement::image('image_en', 'Фото 16:9 (макс. 1280 × 960 px)')
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
