<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use  App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  
         $user=User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',

        ]);
         Listing::factory(8)->create([
            'user_id'=>$user->id
         ]);
     
    }
}
