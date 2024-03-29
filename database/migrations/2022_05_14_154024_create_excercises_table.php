<?php

use App\Models\ExcerciseType;
use App\Models\Template;
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
        Schema::create('excercises', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Template::class);
            $table->foreignIdFor(ExcerciseType::class);
            $table->enum('day',[1,2,3,4,5,6,7]);
            $table->integer('sets');
            $table->enum('progression',['wave','doppia'])->nullable();
            $table->integer('rep_min');
            $table->integer('rep_max');
            $table->integer('recovery_min')->nullable();
            $table->integer('recovery_max')->nullable();
            $table->integer('load')->nullable();
            $table->enum('load_type',['%RPE','RIR','%RM','kg'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excercises');
    }
};
