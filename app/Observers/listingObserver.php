<?php

namespace App\Observers;

use App\Models\Listing;
use App\Models\User;
use App\Notifications\newJobNotify;
use Illuminate\Support\Facades\Cache;

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
        Cache::forget('listings');
        $user=User::all();
        foreach($user as $u){
            $u->notify(new newJobNotify($u));
        }
    }
}
