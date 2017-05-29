<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('picture')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('tagline');
            $table->string('description');
            $table->string('facebookLink')->nullable();
            $table->string('googleLink')->nullable();
            $table->string('twitterLink')->nullable();
            $table->string('video')->nullable();
            $table->integer('score')->nullable();
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
        Schema::drop('speakers');
    }
}
