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
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class constitutive
 *
 * @property \App\Model\constitutive $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Constitutive extends Section implements Initializable
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
    protected $title = 'Учредителям';
    
     /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-clipboard')->setPriority(0);
    }


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::link('tab')->setLabel('# Таблицы'),
            AdminColumn::link('title_oz')->setLabel('Заголовок'),
            AdminColumn::link('created_at')->setLabel('Дата создания'),
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
                AdminFormElement::file('file_ru', 'Файл'),
                AdminFormElement::text('title_ru', 'Заголовок'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('file_oz', 'Файл'),
                AdminFormElement::text('title_oz', 'Заголовок'),

            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('file_en', 'Файл'),
                AdminFormElement::text('title_en', 'Заголовок'),

            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
       ->addBody([
        AdminFormElement::select('tab', 'Таблица',['Устав АО','Внутренние документы','Раскрытие информации','Aкционерам','Бизнес план','Стратегия развития общества','Корпоративные закупки'])->required(),
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
