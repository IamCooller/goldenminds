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
 * Class Contact
 *
 * @property \App\Model\ContactMain $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Contact extends Section implements Initializable
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
    protected $title = 'Контакты';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-book')->setPriority(1);
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
        $form = AdminForm::form()->setElements([
            AdminFormElement::text('tel1', 'Номер телефона №1')->required()->unique(),
            AdminFormElement::text('tel2', 'Номер телефона №2'),
            AdminFormElement::text('email', 'E-mail')->required()->unique(),
            AdminFormElement::wysiwyg('text', 'Текст'),
            AdminFormElement::wysiwyg('address', 'Адрес'),
            AdminFormElement::wysiwyg('map', 'Карта'),
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
