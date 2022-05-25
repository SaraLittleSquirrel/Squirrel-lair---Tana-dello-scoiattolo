<?php

namespace Database\Seeders;

use App\Models\Excercise;
use App\Models\ExcerciseType;
use App\Models\User;
use App\Models\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();

        $templates = Template::factory()->count(5)->for($user)->create();

        $extypes = ExcerciseType::factory()->count(10)->for($user)->create();

        //Scegliere una scheda e un tipo di esercizio
        for ($i = 0; $i < 20; $i++) {
            $template = $templates->random();
            $extype = $extypes->random();

            $excercise = Excercise::factory()->for($template)->for($extype)->create();
        }
    }
}
