<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\User;

#Observers 
use App\Observers\NewUserObserver;

#Events
use App\Events\Notifications\ProcessQueue;
#Listeners 
use App\Listeners\SetSchoolIdInSession;
use App\Listeners\QueueListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \Illuminate\Auth\Events\Login::class => [
            SetSchoolIdInSession::class,
        ],
        ProcessQueue::class => [
            QueueListner::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //New User Observer
        User::observe(NewUserObserver::class);
    }
}
