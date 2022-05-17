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
 * Class Regulations
 *
 * @property \App\Model\Regulations $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Regulations extends Section
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
    protected $title = 'Нормативно-правовые акты';

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
            AdminColumn::link('tab')->setLabel('# Таблица'),
            AdminColumn::link('regist')->setLabel('Дата регистрации'),
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
                AdminFormElement::file('file_ru', 'Акт'),
                AdminFormElement::text('title_ru', 'Заголовок'),
                AdminFormElement::text('number_ru', 'Номер'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('file_oz', 'Акт'),
                AdminFormElement::text('title_oz', 'Заголовок'),
                AdminFormElement::text('number_oz', 'Номер'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::file('file_en', 'Акт'),
                AdminFormElement::text('title_en', 'Заголовок'),
                AdminFormElement::text('number_en', 'Номер'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
       ->addBody([
        AdminFormElement::date('regist', 'Дата регистрации')->required()->setFormat('Y/m/d'),   
        AdminFormElement::select('tab', 'Таблица',[
            'Законы РУз'=>'Законы РУз',
            'Кодексы РУз'=>'Кодексы РУз',
            'Постановления Президента РУЗ'=>'Постановления Президента РУЗ',
            'Указы Президента РУз'=>'Указы Президента РУз', 
            'Распоряжения Президента' =>'Распоряжения Президента',
            'Постановления Кабинета Министров РУз'=>'Постановления Кабинета Министров РУз',
            'Приказы Узбекгидроэнерго'=>'Приказы Узбекгидроэнерго',
            'Ведомственные акты'=>'Ведомственные акты',
            'Законодательные Акты по инвестиционной программе'=>'Законодательные Акты по инвестиционной программе',
            'Авторский и технический надзор'=>'Авторский и технический надзор',
            'О лицензировании'=>'О лицензировании'])->required(),
        
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
