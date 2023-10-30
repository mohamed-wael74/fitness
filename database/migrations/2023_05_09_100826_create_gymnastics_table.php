<?php

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
        Schema::create('gymnastics', function (Blueprint $table) {
            $table->id();
            $table->string("exercise_name");
            $table->string("exercise_category");
            $table->string("exercise_description");
            $table->string("exercise_image");
            $table->string("exercise_video");
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
        Schema::dropIfExists('gymnastics');
    }
};
