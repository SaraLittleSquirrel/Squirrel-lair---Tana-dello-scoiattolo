<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExcerciseType>
 */
class ExcerciseTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->word(),
            'equipment'=>$this->faker->sentence(2),
            'trained_body_part'=>$this->faker->randomElement(['addome', 'bicipiti', 'femorali', 'gambe', 'petto', 'polpacci', 'quadricipiti', 'schiena', 'spalle', 'tricipiti'])
        ];
    }
}
