<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminDisplayFilter;
use AdminForm;
use AdminFormElement;
use AdminSection;
use SleepingOwl\Admin\Form\FormElements;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class Vacancy
 *
 * @property \App\Model\Vacancy $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Vacancy extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Вакансии';

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
            AdminColumn::link('vacancy_oz')->setLabel('Вакансия')->setWidth('30%'),
            AdminColumn::link('title')->setLabel('Заголовок')->setWidth('50%'),
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
                AdminFormElement::text('vacancy_ru', 'Вакансия'),
                AdminFormElement::text('title_ru', 'Заголовок'),
                AdminFormElement::wysiwyg('vacancy_desc_ru', 'Краткое описание'),
                AdminFormElement::wysiwyg('function_ru', 'Обязанности'),
                AdminFormElement::wysiwyg('requirement_ru', 'Требования'),
                AdminFormElement::wysiwyg('conditions_ru', 'Условия работы'),
                AdminFormElement::ckeditor('skills_ru', 'Ключевые навыки'),

            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('vacancy_oz', 'Вакансия'),
                AdminFormElement::text('title_oz', 'Заголовок'),
                AdminFormElement::wysiwyg('vacancy_desc_oz', 'Краткое описание'),
                AdminFormElement::wysiwyg('function_oz', 'Обязанности'),
                AdminFormElement::wysiwyg('requirement_oz', 'Требования'),
                AdminFormElement::wysiwyg('conditions_oz', 'Условия работы'),
                AdminFormElement::ckeditor('skills_oz', 'Ключевые навыки'),

            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('vacancy_en', 'Вакансия'),
                AdminFormElement::text('title_en', 'Заголовок'),
                AdminFormElement::wysiwyg('vacancy_desc_en', 'Краткое описание'),
                AdminFormElement::wysiwyg('function_en', 'Обязанности'),
                AdminFormElement::wysiwyg('requirement_en', 'Требования'),
                AdminFormElement::wysiwyg('conditions_en', 'Условия работы'),
                AdminFormElement::ckeditor('skills_en', 'Ключевые навыки'),

            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])

       ->addBody([
        AdminFormElement::select('tab', 'Таблица',['Вакансии','Общие требования к кандидатам'])->required(),
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
