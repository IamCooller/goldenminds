<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use App\Role;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;



use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Contracts\WithRoutesInterface;
/**
 * Class Users
 *
 * @property \App\User $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Users extends Section 
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
    protected $title = 'Пользователи';

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
     


            $display = AdminDisplay::datatablesAsync()
            ->with('roles')
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns([
                AdminColumn::link('name', 'Username'),
                AdminColumn::email('email', 'Email')->setWidth('150px'),
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
        return AdminForm::panel()->addBody([
            AdminFormElement::text('name', 'Username')->required(),
            AdminFormElement::password('password', 'Password')->required()->addValidationRule('min:6'),
            AdminFormElement::text('email', 'E-mail')->required()->addValidationRule('email'),
            AdminFormElement::multiselect('roles', 'Roles', Role::class)->setDisplay('name'),
        ])->setHtmlAttribute('enctype', 'multipart/form-data');
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
