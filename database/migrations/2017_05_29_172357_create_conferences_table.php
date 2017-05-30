<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('slug');
            $table->dateTime('date');
            $table->integer('duration')->nullable();
            $table->string('auditorium')->nullable();
            $table->integer('speaker_id')->unsigned()->nullable();
            $table->foreign('speaker_id')->references('id')->on('speakers');
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
        Schema::drop('conferences');
    }
}
