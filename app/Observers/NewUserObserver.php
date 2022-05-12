<?php

namespace App\Observers;

use App\Models\User;
use App\Models\School;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CompleteAccountSetupNotification;


class NewUserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $school_id=$user->school_id; 
        $role=$user->role;
        $email=$user->email;
        $name=$user->name;
       
        switch ($role) {
            case 'onboarding':
                
                $create_new_school=new School;

                //Send Notification to User 
                $user->notify(new CompleteAccountSetupNotification($name));
                // Notification::route('mail',  $email)->notify(new CompleteAccountSetupNotification($name));
                # code...
                break;
            
            default:
                # code...
                break;
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
