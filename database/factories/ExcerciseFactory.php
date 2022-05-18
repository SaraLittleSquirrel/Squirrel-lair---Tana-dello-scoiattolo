<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Excercise>
 */
class ExcerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rep_min = rand(1, 10);
        $rep_max = rand($rep_min, 12);
        $rec_min = rand(30,180);
        $rec_max=rand($rec_min,300);

        return [
            'day' => rand(1, 7),
            'sets' => rand(1, 5),
            'progression' => $this->faker->randomElement(['wave', 'doppia']),
            'rep_min' => $rep_min,
            'rep_max'=> $rep_max,
            'recovery_min'=>$rec_min,
            'recovery_max'=>$rec_max,
            'load'=>rand(1,100),
            'load_type'=>$this->faker->randomElement(['%RPE','RIR','%RM','kg'])


        ];
    }
}
