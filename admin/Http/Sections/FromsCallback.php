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
 * Class FromsCallback
 *
 * @property \App\Model\FromsCallback $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class FromsCallback extends Section implements Initializable
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
    protected $title = 'Обратная связь';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-anchor')->setPriority(99);
    }
    

    /**
     * @return DisplayInterface
     */
    public function onDisplay(\App\Model\FromsCallback $model)
    {
 
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::link('tel')->setLabel('Телефон'),
            AdminColumn::link('name')->setLabel('ФИО'),
            AdminColumn::link('email')->setLabel('Email'),
            AdminColumn::link('form')->setLabel('Форма'),
            AdminColumn::link('created_at')->setLabel('Время'),
        ]);

        
    
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

        
        $elements =[];
        $model = $this->getModelValue();
        if($model == null){
            $form = AdminForm::form()->setElements([    
            
                AdminFormElement::text('tel')->setLabel('Телефон'),
                AdminFormElement::text('name')->setLabel('ФИО'),
                AdminFormElement::text('email')->setLabel('Email'),
                AdminFormElement::textarea('subject')->setLabel('Сообщение'),
                AdminFormElement::text('vacancy')->setLabel('Вакансия'),
                AdminFormElement::file('file')->setLabel('Резюме'),
                AdminFormElement::text('service')->setLabel('Услуга'),
                AdminFormElement::text('index')->setLabel('Индекс'),
                AdminFormElement::text('form')->setLabel('Форма'),
                
            ]);
            return $form;
        }
        if($model->tel){
        $elements[]=
            AdminFormElement::text('tel')->setLabel('Телефон');
        }
        if($model->email){
            $elements[]=    
                AdminFormElement::text('email')->setLabel('Email');
        }
        if($model->form){
            $elements[]=    
                AdminFormElement::text('form')->setLabel('Форма');
        }
        if($model->index){
            $elements[]=    
                AdminFormElement::text('index')->setLabel('Индекс');
        }
            
        if($model->service){
            $elements[]=    
                AdminFormElement::text('service')->setLabel('Услуга');
        }
        if($model->file){
            $elements[]=    
                AdminFormElement::file('file')->setLabel('Резюме');
        }
        if($model->subject){
            $elements[]=    
                AdminFormElement::textarea('subject')->setLabel('Сообщение');
        }
        if($model->name){
            $elements[]=    
                AdminFormElement::text('name')->setLabel('ФИО');
        }
        if($model->vacancy){
            $elements[]=    
                AdminFormElement::text('vacancy')->setLabel('Вакансия');
        }
        $form = AdminForm::form()->setElements($elements);
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
