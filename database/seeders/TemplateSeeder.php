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
        $users = User::factory()->count(20)->create();

        foreach ($users as $user) {
            $templates = Template::factory()->count(20)->for($user)->create();

            $extypes = ExcerciseType::factory()->count(30)->for($user)->create();

            //Scegliere una scheda e un tipo di esercizio
            for ($i = 0; $i < 100; $i++) {
                $template = $templates->random();
                $extype = $extypes->random();
                Excercise::factory()->for($template)->for($extype)->create();
            }
        }
    }
}
