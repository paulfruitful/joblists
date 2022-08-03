<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'company'=>$this->faker->company(),
          'title'=>$this->faker->sentence(),
          'email'=>$this->faker->email(),
          'location'=>$this->faker->city(),
          'website'=>$this->faker->url(),
          'tags'=>"Laravel,Full-stack,PHP-dev",
          'description'=>$this->faker->paragraph(13)


        ];
    }
}
