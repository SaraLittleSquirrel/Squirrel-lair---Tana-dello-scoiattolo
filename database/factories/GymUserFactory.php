<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GymUser>
 */
class GymUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //come dev'essere fatta un'istanza di gymUser
            'username' => $this->faker->unique()->userName(),
            'password' => $this->faker->password()
        ];
    }
}
