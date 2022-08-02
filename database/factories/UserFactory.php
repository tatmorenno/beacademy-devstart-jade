<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {


        $phone = $this->faker->phoneNumber();
        $formatted_phone = str_replace(array('\'', '"', ',', ';', '<', '>', '(', ')', '-', ' '), '', $phone);

        $cpf = $this->faker->cpf;
        $formatted_cpf = str_replace(array('\'', '"', ',', ';', '<', '>', '(', ')', '-', '.', ' '), '', $cpf);

        return [
            'is_admin' => 0,
            'name' => $this->faker->firstName() . " " . $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt(now() . Str::random(10)), // password
            'remember_token' => Str::random(10),
            'phone' => $formatted_phone,
            'birth_date' => $this->faker->dateTimeBetween()->format('Y-m-d'),
            'cpf' =>  $formatted_cpf,
            'zipcode' => $this->faker->postcode(),
            'address' => $this->faker->streetAddress(),
            'number-house' => random_int(0, 99),
            'district' => "Bairro " . $this->faker->lastName(),
            'city' => $this->faker->city(),
            'state' => $this->faker->stateAbbr(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
