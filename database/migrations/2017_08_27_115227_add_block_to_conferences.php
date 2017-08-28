<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBlockToConferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conferences', function(Blueprint $table)
        {
            $table->integer('block_id')->unsigned()->nullable();
            $table->foreign('block_id')->references('id')->on('blocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conferences', function(Blueprint $table)
        {
            $table->dropForeign(['block_id']);
            $table->dropColumn('block_id');
        });
    }
}
