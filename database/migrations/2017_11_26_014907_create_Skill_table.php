<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_XpTable')->reference('id')->on('Competences');
            $table->string('nameSkill');
            $table->timestamps();
        });


        DB::insert('insert into skills(id_XpTable, nameSkill) VALUES ( 1,"Mining")');
        DB::insert('insert into skills(id_XpTable, nameSkill) VALUES ( 1,"Hunting")');
        DB::insert('insert into skills(id_XpTable, nameSkill) VALUES ( 1,"Fishing")');
        DB::insert('insert into skills(id_XpTable, nameSkill) VALUES ( 2,"Invention")');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SkillController.');
    }
}
