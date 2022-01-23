<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "name" => $this->faker->company(),
            "desc" => $this->faker->sentence(),
            "user_id" => 1,
            "created_at" => now()
        ];
    }
}
