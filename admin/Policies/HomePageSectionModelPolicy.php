<?php

namespace Admin\Policies;

use App\Model\Contact;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomePageSectionModelPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param string $ability
     * @param Contacts $section
     * @param Contact $contact
     *
     * @return bool
     */
    public function before(User $user, $ability, $section, $model)
    {
        if ($user->hasRole('admin') || $user->hasRole('manager')) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param User $user
     * @param Contacts $section
     * @param Contact $contact
     *
     * @return bool
     */
    public function display(User $user, $section, $model)
    {
        return $user->hasRole('manager');
    }

    /**
     * @param User $user
     * @param Contacts $section
     * @param Contact $contact
     *
     * @return bool
     */
    public function create(User $user, $section, $model)
    {
        return $user->hasRole('manager');
    }

    /**
     * @param User $user
     * @param Contacts $section
     * @param Contact $contact
     *
     * @return bool
     */
    public function edit(User $user, $section, $model)
    {
        return $user->hasRole('manager') && $model->isAuthor($user);
    }

    /**
     * @param User $user
     * @param Contacts $section
     * @param Contact $contact
     *
     * @return bool
     */
    public function restore(User $user, $section, $model)
    {
        return $user->hasRole('manager') && $model->isAuthor($user);
    }

    /**
     * @param User $user
     * @param Contacts $section
     * @param Contact $contact
     *
     * @return bool
     */
    public function delete(User $user, $section, $model)
    {
        return $user->hasRole('manager') && $model->isAuthor($user);
    }
}
