<?php

namespace App\Observers;

use App\Models\Listing;

class listObserve
{
    /**
     * Handle the Listing "created" event.
     *
     * @param  \App\Models\Listing  $listing
     * @return void
     */
    public function created(Listing $listing)
    {
        //
    }

    /**
     * Handle the Listing "updated" event.
     *
     * @param  \App\Models\Listing  $listing
     * @return void
     */
    public function updated(Listing $listing)
    {
        //
    }

    /**
     * Handle the Listing "deleted" event.
     *
     * @param  \App\Models\Listing  $listing
     * @return void
     */
    public function deleted(Listing $listing)
    {
        //
    }

    /**
     * Handle the Listing "restored" event.
     *
     * @param  \App\Models\Listing  $listing
     * @return void
     */
    public function restored(Listing $listing)
    {
        //
    }

    /**
     * Handle the Listing "force deleted" event.
     *
     * @param  \App\Models\Listing  $listing
     * @return void
     */
    public function forceDeleted(Listing $listing)
    {
        //
    }
}
