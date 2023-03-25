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
            'title' => $this->faker->sentence(),
            'tags' => 'Essence',
            'company' => '4 places',
            'email' => 'marcosdeimos19@gmail.com',
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'description' => 'Un superbe véhicule de location qui est hyper pratique et tout terrain.Il est vas vous satisfaire dans vos voyage ou activité quotidienne.',
        ];
    }
}
