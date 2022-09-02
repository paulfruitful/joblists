<?php

namespace App\Observers;

use App\Models\Listing;

class listingObserver
{
    /**
     * Handle the Listing "created" event.
     *
     * @param  \App\Models\Listing  $listing
     * @return void
     */
    public function created(Listing $listing)
    {
        Cache::forget();
    }
}
