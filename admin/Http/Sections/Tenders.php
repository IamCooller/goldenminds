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
 * Class Company
 *
 * @property \App\Model\Company $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Tenders extends Section implements Initializable
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
    protected $title = 'Тендеры';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-gavel')->setPriority(0);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::image('image')->setLabel('Изображение'),
            AdminColumn::link('name_oz')->setLabel('Заголовок'),
            AdminColumn::text('open_oz')->setLabel('Открыт/Закрыт')->setHtmlAttribute('class', 'text-muted'),
        ]);

        $display
        ->getExtension('links')
        ->add('<div class="alert alert-info mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Заголовок, Открыть/Закрыть появляется после заполнения формы на Узбекском языке</div>')
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
                AdminFormElement::select('open_ru', 'Открыт/Закрыт',['Завершённые'=>'Завершённые','Действующие'=>'Действующие'])->setDefaultValue('Завершённые'),
                AdminFormElement::files('files_ru', 'Файлы'),
                AdminFormElement::file('image_ru', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->addValidationRule('mimes:jpg,bmp,png')->setView(view('admin.custom.image')),
            ]))->setLabel('RU');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_oz', 'Title'),
                AdminFormElement::text('keywords_oz', 'Keywords'),
                AdminFormElement::text('description_oz', 'Description'),
                AdminFormElement::text('name_oz', 'Заголовок'),
                AdminFormElement::wysiwyg('content_oz', 'Текст'),
                AdminFormElement::select('open_oz', 'Открыт/Закрыт',['Завершённые'=>'Завершённые','Действующие'=>'Действующие'])->setDefaultValue('Завершённые'),
                AdminFormElement::files('files_oz', 'Файлы'),
                AdminFormElement::file('image_oz', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->addValidationRule('mimes:jpg,bmp,png')->setView(view('admin.custom.image')),
            ]))->setLabel('OZ');
            $tabsRU[] = AdminDisplay::tab(AdminForm::elements([
                AdminFormElement::text('title_en', 'Title'),
                AdminFormElement::text('description_en', 'Description'),
                AdminFormElement::text('keywords_en', 'Keywords'),
                AdminFormElement::text('name_en', 'Заголовок'),
                AdminFormElement::wysiwyg('content_en', 'Текст'),
                AdminFormElement::select('open_en', 'Открыт/Закрыт',['Завершённые'=>'Завершённые','Действующие'=>'Действующие'])->setDefaultValue('Завершённые'),
                AdminFormElement::files('files_en', 'Файлы'),
                AdminFormElement::file('image_en', 'Главное изображение 16:9 (макс. 1280 × 960 px)')->addValidationRule('mimes:jpg,bmp,png')->setView(view('admin.custom.image')),
            ]))->setLabel('EN'); 
            return $tabsRU;
        });

       
        $form = AdminForm::card()
        ->addHeader([
            $tabs
        ])
        ->addScript('custom-image', '/customjs/customimage.js', ['admin-default'])
       ->addBody([
        ('<div class="alert alert-danger mb-0 m-3"><i class="fa fa-fw fa-info-circle"></i>Перед сохранением проверьте все поля! Тендер не будет отображаться без заголовка !</div>')

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
