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
use SleepingOwl\Admin\Contracts\Initializable;
/**
 * Class HomePage
 *
 * @property \App\Model\HomePage $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class HomePage extends Section implements Initializable
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
    protected $title = 'Главная страница';

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-server')->setPriority(0);
    }


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
 

        return $this->fireEdit(1);


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
                AdminFormElement::text('toptitle_ru', 'Главный заголовок'),
                
                AdminFormElement::wysiwyg('about_ru', 'О компании'),
                AdminFormElement::wysiwyg('mission_ru', 'МИССИЯ АО'),
                AdminFormElement::textarea('compitence_1_ru', 'Преимущество №1'),
                AdminFormElement::textarea('compitence_2_ru', 'Преимущество №2'),
                AdminFormElement::textarea('compitence_3_ru', 'Преимущество №3'),
                AdminFormElement::textarea('task_1_ru', 'Задачи №1'),
                AdminFormElement::textarea('task_2_ru', 'Задачи №2'),
                AdminFormElement::textarea('task_3_ru', 'Задачи №3'),
                AdminFormElement::textarea('task_4_ru', 'Задачи №4'),
                AdminFormElement::textarea('task_5_ru', 'Задачи №5'),
                
            AdminFormElement::image('background_ru', 'Задний фон')->setView(view('admin.custom.image')),
            AdminFormElement::text('completed_projects_ru', 'Выполненных проектов'),
            AdminFormElement::text('year_market_ru', 'Год на рынке'),
            AdminFormElement::text('million_power_ru', 'Млн. кВт мощности'),
            AdminFormElement::text('billion_output_ru', 'Млрд. кВт*час выработки'),
            AdminFormElement::image('task_img_ru', 'Изображение в секции (Задачи)')->setView(view('admin.custom.image')),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('toptitle_oz', 'Главный заголовок'),
                AdminFormElement::wysiwyg('about_oz', 'О компании'),
                AdminFormElement::wysiwyg('mission_oz', 'МИССИЯ АО'),
                AdminFormElement::textarea('compitence_1_oz', 'Преимущество №1'),
                AdminFormElement::textarea('compitence_2_oz', 'Преимущество №2'),
                AdminFormElement::textarea('compitence_3_oz', 'Преимущество №3'),
                AdminFormElement::textarea('task_1_oz', 'Задачи №1'),
                AdminFormElement::textarea('task_2_oz', 'Задачи №2'),
                AdminFormElement::textarea('task_3_oz', 'Задачи №3'),
                AdminFormElement::textarea('task_4_oz', 'Задачи №4'),
                AdminFormElement::textarea('task_5_oz', 'Задачи №5'),
                AdminFormElement::image('background_oz', 'Задний фон')->setView(view('admin.custom.image')),
                AdminFormElement::text('completed_projects_oz', 'Выполненных проектов'),
                AdminFormElement::text('year_market_oz', 'Год на рынке'),
                AdminFormElement::text('million_power_oz', 'Млн. кВт мощности'),
                AdminFormElement::text('billion_output_oz', 'Млрд. кВт*час выработки'),
                AdminFormElement::image('task_img_oz', 'Изображение в секции (Задачи)')->setView(view('admin.custom.image')),

            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::text('toptitle_en', 'Главный заголовок'),
                AdminFormElement::wysiwyg('about_en', 'О компании'),
                AdminFormElement::wysiwyg('mission_en', 'МИССИЯ АО'),
                AdminFormElement::textarea('compitence_1_en', 'Преимущество №1'),
                AdminFormElement::textarea('compitence_2_en', 'Преимущество №2'),
                AdminFormElement::textarea('compitence_3_en', 'Преимущество №3'),
                AdminFormElement::textarea('task_1_en', 'Задачи №1'),
                AdminFormElement::textarea('task_2_en', 'Задачи №2'),
                AdminFormElement::textarea('task_3_en', 'Задачи №3'),
                AdminFormElement::textarea('task_4_en', 'Задачи №4'),
                AdminFormElement::textarea('task_5_en', 'Задачи №5'),
                AdminFormElement::image('background_en', 'Задний фон')->setView(view('admin.custom.image')),
                AdminFormElement::text('completed_projects_en', 'Выполненных проектов'),
                AdminFormElement::text('year_market_en', 'Год на рынке'),

                AdminFormElement::text('million_power_en', 'Млн. кВт мощности'),
                AdminFormElement::text('billion_output_en', 'Млрд. кВт*час выработки'),
                AdminFormElement::image('task_img_en', 'Изображение в секции (Задачи)')->setView(view('admin.custom.image')),
                
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

     

  

      

        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customimage.js', ['admin-default'])
       ->addBody([

          

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

}
