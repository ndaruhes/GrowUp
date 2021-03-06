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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('cover');
            $table->string('title');
            $table->string('description');
            $table->integer('price')->nullable();
            $table->date('started_at');
            $table->date('ended_at');
            $table->integer('max_mentee');
            $table->integer('rating')->nullable();
            $table->integer('category_id');
            $table->integer('mentor_id');
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
        Schema::dropIfExists('courses');
    }
};
