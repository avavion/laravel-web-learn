<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'placeholder_' . rand(1, 6) . '.jpg',
            'name' => $this->faker->text(rand(6, 20)),
            'content' => $this->faker->realTextBetween(30, 120),
            'price' => rand(1000, 10000)
        ];
    }
}
