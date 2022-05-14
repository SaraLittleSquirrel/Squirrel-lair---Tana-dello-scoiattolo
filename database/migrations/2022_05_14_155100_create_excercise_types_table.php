<?php

use App\Models\GymUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excercise_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(GymUser::class);
            $table->string('name');
            $table->string('equipment');
            $table->set('trained_body_part',['schiena','petto','gambe','spalle','tricipiti','bicipiti','addome','polpacci','quadricipiti','femorali']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excercise_types');
    }
};
