<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use  App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
             'name' => 'Zoe',
             'email' => 'test@example.com',
             'password'=>Hash::make('fruitful1')

        ]);
         Listing::factory(18)->create([
            'user_id'=>$user->id
         ]);
     
    }
}
