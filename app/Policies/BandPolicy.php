<?php

namespace App\Policies;

use App\User;
use App\Band;
use Illuminate\Auth\Access\HandlesAuthorization;

class BandPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the band.
     *
     * @param  \App\User  $user
     * @param  \App\Band  $band
     * @return mixed
     */
    public function view(User $user, Band $band)
    {
        //
    }

    /**
     * Determine whether the user can create bands.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the band.
     *
     * @param  \App\User  $user
     * @param  \App\Band  $band
     * @return mixed
     */
    public function update(User $user, Band $band)
    {
        if($band->members->contains($user->id) || $band->owner_id == $user->id){
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the band.
     *
     * @param  \App\User  $user
     * @param  \App\Band  $band
     * @return mixed
     */
    public function delete(User $user, Band $band)
    {
        return $band->owner_id == $user->id;
    }
}
