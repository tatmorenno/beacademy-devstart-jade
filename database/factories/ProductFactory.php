<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'description' => $this->faker->lastName(),
            'quantity' => random_int(430, 749),
            'cost_price' => random_int(790, 1099) . '.' . random_int(10, 99),
            'sale_price' => random_int(1730, 2950) . '.' . random_int(10, 99),
            'image' => 'https://place-hold.it/250x250.png'
        ];
    }
}
