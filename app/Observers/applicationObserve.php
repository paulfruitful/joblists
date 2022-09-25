<?php

namespace App\Observers;

use App\Models\application;

class applicationObserve
{
    /**
     * Handle the application "created" event.
     *
     * @param  \App\Models\application  $application
     * @return void
     */
    public function created(application $application)
    {
        //
    }

    /**
     * Handle the application "updated" event.
     *
     * @param  \App\Models\application  $application
     * @return void
     */
    public function updated(application $application)
    {
        //
    }

    /**
     * Handle the application "deleted" event.
     *
     * @param  \App\Models\application  $application
     * @return void
     */
    public function deleted(application $application)
    {
        //
    }

    /**
     * Handle the application "restored" event.
     *
     * @param  \App\Models\application  $application
     * @return void
     */
    public function restored(application $application)
    {
        //
    }

    /**
     * Handle the application "force deleted" event.
     *
     * @param  \App\Models\application  $application
     * @return void
     */
    public function forceDeleted(application $application)
    {
        //
    }
}
