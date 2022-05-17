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
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::image('image')->setLabel('Изображение'),
            AdminColumn::link('name_oz')->setLabel('Заголовок'),
            AdminColumn::link('status_oz')->setLabel('Статус'),
            AdminColumn::link('category_oz')->setLabel('Категория'),
            AdminColumn::text('created_at')->setLabel('Дата')->setWidth('15%')->setHtmlAttribute('class', 'text-muted'),
        ]);
        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Заголовок, Статус, Катеогория появляется после заполнения формы на Узбекском языке</div>')
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
                AdminFormElement::text('years_ru', 'Года'),
                AdminFormElement::select('category_ru', 'Страна', ['Афганистан'=>'Афганистан',
                'Вьетнам'=>'Вьетнам',
                'Казахстан'=>'Казахстан',
                'Киргизия'=>'Киргизия',
                'Таджикистан'=>'Таджикистан',
                'Туркменистан'=>'Туркменистан',
                'Узбекистан'=>'Узбекистан']),
        
                AdminFormElement::image('image_ru', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->setView(view('admin.custom.image')),
                AdminFormElement::images('images_ru', 'Дополнительные изображения 16:9 (макс. 1280 × 960 px)'),
                AdminFormElement::text('power_ru', 'Установленная мощность'),
                AdminFormElement::text('countagrs_ru', 'Количество агрегатов'),
                AdminFormElement::text('watter_ru', 'Расход воды'),
                AdminFormElement::text('output_ru', 'Годовая выработка'),
                
                AdminFormElement::select('status_ru', 'Статус', ['Действующая'=>'Действующая','Модернизированная'=>'Модернизированная','Списанная'=>'Списанная','Неизвестен'=>'Неизвестен']),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('name_oz', 'Заголовок'),
                AdminFormElement::wysiwyg('content_oz', 'Текст'),
                AdminFormElement::text('years_oz', 'Года'),
                AdminFormElement::select('category_oz', 'Страна', ['Афганистан'=>'Афганистан',
                'Вьетнам'=>'Вьетнам',
                'Казахстан'=>'Казахстан',
                'Киргизия'=>'Киргизия',
                'Таджикистан'=>'Таджикистан',
                'Туркменистан'=>'Туркменистан',
                'Узбекистан'=>'Узбекистан']),
        
                AdminFormElement::image('image_oz', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->setView(view('admin.custom.image')),
                AdminFormElement::images('images_oz', 'Дополнительные изображения 16:9 (макс. 1280 × 960 px)'),
                AdminFormElement::text('power_oz', 'Установленная мощность'),
                AdminFormElement::text('countagrs_oz', 'Количество агрегатов'),
                AdminFormElement::text('watter_oz', 'Расход воды'),
                AdminFormElement::text('output_oz', 'Годовая выработка'),
                
                AdminFormElement::select('status_oz', 'Статус', ['Действующая'=>'Действующая','Модернизированная'=>'Модернизированная','Списанная'=>'Списанная','Неизвестен'=>'Неизвестен']),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::text('name_en', 'Заголовок'),
                AdminFormElement::wysiwyg('content_en', 'Текст'),
                AdminFormElement::text('years_en', 'Года'),
                AdminFormElement::select('category_en', 'Страна', ['Афганистан'=>'Афганистан',
                'Вьетнам'=>'Вьетнам',
                'Казахстан'=>'Казахстан',
                'Киргизия'=>'Киргизия',
                'Таджикистан'=>'Таджикистан',
                'Туркменистан'=>'Туркменистан',
                'Узбекистан'=>'Узбекистан']),
        
                AdminFormElement::image('image_en', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->setView(view('admin.custom.image')),
                AdminFormElement::images('images_en', 'Дополнительные изображения 16:9 (макс. 1280 × 960 px)'),
                AdminFormElement::text('power_en', 'Установленная мощность'),
                AdminFormElement::text('countagrs_en', 'Количество агрегатов'),
                AdminFormElement::text('watter_en', 'Расход воды'),
                AdminFormElement::text('output_en', 'Годовая выработка'),
                
                AdminFormElement::select('status_en', 'Статус', ['Действующая'=>'Действующая','Модернизированная'=>'Модернизированная','Списанная'=>'Списанная','Неизвестен'=>'Неизвестен']),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customimage.js', ['admin-default'])
       ->addBody([
        ('<div class="alert alert-danger mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Перед сохранением проверьте все поля! Проект не будет выводиться без главного изображения!</div>')

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
