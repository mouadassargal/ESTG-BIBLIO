<?php

namespace App\Policies;

use App\Ouvrage;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OuvragePolicy
{
    use HandlesAuthorization;
    public function before($user,$ability){
        if($user->is_admin){
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
     * @param  \App\Ouvrage  $ouvrage
     * @return mixed
     */
    public function view(User $user, Ouvrage $ouvrage)
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
     * @param  \App\Ouvrage  $ouvrage
     * @return mixed
     */
    public function update(User $user, Ouvrage $ouvrage)
    {
        return false;

        // return $user->id === $ouvrage->user_id;

        
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Ouvrage  $ouvrage
     * @return mixed
     */
    public function delete(User $user, Ouvrage $ouvrage)
    {
        // return $user->id === $ouvrage->user_id;
        return false;

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Ouvrage  $ouvrage
     * @return mixed
     */
    public function restore(User $user, Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Ouvrage  $ouvrage
     * @return mixed
     */
    public function forceDelete(User $user, Ouvrage $ouvrage)
    {
        //
    }
}
