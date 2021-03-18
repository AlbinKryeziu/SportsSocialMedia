<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesExamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises_examples', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tile');
            $table->longText('image');
            $table->longText('description');
            $table->unsignedBigInteger('exercies_id')->nullable();
            $table->foreign('exercies_id')->references('id')->on('exercises')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises_examples');
    }
}
