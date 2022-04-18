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
 * Class Contacts2
 *
 * @property \App\Model\History $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class History extends Section
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
    protected $title = 'Инстория развития института';

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
            AdminColumn::link('name_oz')->setLabel('Заголовок')->setWidth('50%'),
            AdminColumn::link('years')->setLabel('Дата')->setWidth('30%'),
            AdminColumn::link('created_at')->setLabel('Дата создания')->setWidth('20%'),
        ]);

        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Текст появляется после заполнения формы на Узбекском языке</div>')
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
                AdminFormElement::text('name_ru', 'Заголовок'),

                AdminFormElement::wysiwyg('content_ru', 'Контент'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('name_oz', 'Заголовок'),
                AdminFormElement::wysiwyg('content_oz', 'Контент'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('name_en', 'Заголовок'),
                AdminFormElement::wysiwyg('content_en', 'Контент'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customimage.js', ['admin-default'])
       ->addBody([
        AdminFormElement::text('years', 'Год')->required()->unique(),
        AdminFormElement::files('images', 'Галлерея')->required()->unique(),
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
