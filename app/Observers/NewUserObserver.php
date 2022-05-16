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
        $school_id = $user->school_id;
        $role = $user->role;
        $email = $user->email;
        $name = $user->name;

        switch ($role) {
            case 'onboarding':

                $create_new_school = new School;



                //Send Notification to User 
                $name = $user->name;
                $subject = "Complete Your Account Setup";
                $message = 'Thank you for signing up. Your account setup process is incomplete. Click "Complete Account Setup" below to complete setting up your account.';
                $url = config('app.url') . '/login';
                $action = 'Complete Account Setup';

                $user->notify(new CompleteAccountSetupNotification($name, $subject, $message, $action, $url));
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
        switch ($user->role) {
            case 'school':
                //Send Notification to User
                $name = $user->name;
                $subject = "Congratulations. You have completed your account setup!";
                $message = "You're account setup is complete. Please proceed to setup classess for your new school.";
                $url = url('/classes');
                $url = serialize($url);
                $action = 'Setup Classes';
                $user->notify(new CompleteAccountSetupNotification($name, $subject, $message, $action, $url));

                break;

            default:
                # code...
                break;
        }
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
