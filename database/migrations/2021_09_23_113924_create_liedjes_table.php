<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiedjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liedjes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genres_id');
            $table->string('name');
            $table->string('creator');
            $table->string('album');
            $table->time('length');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liedjes');
    }
}
