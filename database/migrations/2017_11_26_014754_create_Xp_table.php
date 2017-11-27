<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Xps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_XpTable')->reference('id')->on('xp_tbs');
            $table->integer('lvl');
            $table->integer('xp');
            $table->integer('dif');
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
        Schema::dropIfExists('Xp');
    }
}
