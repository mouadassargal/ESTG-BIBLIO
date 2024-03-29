<?php

namespace App\Policies;

use App\Livre;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LivrePolicy
{
    use HandlesAuthorization;
    public function before($user,$ability){
        if($user->is_admin and $ability !="delete"){
            return true;
        }
      

    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Livre  $livre
     * @return mixed
     */
    public function view(User $user, Livre $livre)
    {
        
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Livre  $livre
     * @return mixed
     */
    public function update(User $user, Livre $livre)
    {
        return false;
        
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Livre  $livre
     * @return mixed
     */
    public function delete(User $user, Livre $livre)
    {
        return $user->id === $livre->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Livre  $livre
     * @return mixed
     */
    public function restore(User $user, Livre $livre)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Livre  $livre
     * @return mixed
     */
    public function forceDelete(User $user, Livre $livre)
    {
        //
    }
}
