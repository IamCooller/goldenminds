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

use AdminFormButton;
/**
 * Class Projects
 *
 * @property \App\Model\Projects $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Projects extends Section implements Initializable
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
    protected $title = 'Проекты';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-folder-open')->setPriority(0);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::image('image')->setLabel('Изображение'),
            AdminColumn::link('name')->setLabel('Заголовок'),
            AdminColumn::link('status')->setLabel('Статус'),
            AdminColumn::link('category')->setLabel('Категория'),
            AdminColumn::text('created_at')->setLabel('Дата')->setWidth('15%')->setHtmlAttribute('class', 'text-muted'),
        ]);
        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Текст появляется после заполнения формы на Узбекском языке</div>')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i> Для добавления новых стран на карте, обратитесь к разработчикам</div>')
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
                AdminFormElement::text('name_ru', 'Заголовок'),
                AdminFormElement::wysiwyg('content_ru', 'Текст'),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('name_oz', 'Заголовок'),
                AdminFormElement::wysiwyg('content_oz', 'Текст'),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::text('name_en', 'Заголовок'),
                AdminFormElement::wysiwyg('content_en', 'Текст'),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customimage.js', ['admin-default'])
       ->addBody([
        AdminFormElement::text('years', 'Года')->required(),
        AdminFormElement::select('category', 'Страна', ['Афганистан'=>'Афганистан',
        'Вьетнам'=>'Вьетнам',
        'Казахстан'=>'Казахстан',
        'Киргизия'=>'Киргизия',
        'Таджикистан'=>'Таджикистан',
        'Туркменистан'=>'Туркменистан',
        'Узбекистан'=>'Узбекистан'])
        ->required(),

        AdminFormElement::image('image', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->setView(view('admin.custom.image'))->required(),
        AdminFormElement::images('images', 'Дополнительные изображения 16:9 (макс. 1280 × 960 px)'),
        AdminFormElement::text('power', 'Установленная мощность')->required(),
        AdminFormElement::text('countagrs', 'Количество агрегатов'),
        AdminFormElement::text('watter', 'Расход воды'),
        AdminFormElement::text('output', 'Годовая выработка'),
        
        AdminFormElement::select('status', 'Статус', ['Действующая'=>'Действующая','Модернизированная'=>'Модернизированная','Списанная'=>'Списанная','Неизвестен'=>'Неизвестен'])->required(),
       ])

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
