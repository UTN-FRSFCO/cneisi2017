<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistances', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('conference_id')->unsigned();
            $table->foreign('conference_id')->references('id')->on('conferences');
            $table->date('date');
            $table->string('dni');
            $table->string('catcher_name');
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
        Schema::drop('assistances');
    }
}
