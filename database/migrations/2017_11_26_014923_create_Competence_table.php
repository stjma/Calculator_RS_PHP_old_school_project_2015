<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCompetenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Competences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_skill')->reference('id')->on('Skills');
            $table->string('name');
            $table->integer('xp');
            $table->timestamps();
        });

        DB::insert('insert into competences(id_skill, name, xp) VALUES (1,"Living minerals",25)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (1,"Bane ore",90)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (1,"Concentrated coal rocks",50)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (1,"Harmonised coal rock",40)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (1,"Concentrated gold rocks",65)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (1,"Red sandstone",70)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (1,"Harmonised mithril rock",80)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (1,"Runite",125)');

        DB::insert('insert into competences(id_skill, name, xp) VALUES (2,"Oily bakami",500)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (2,"Bundling bakami",525)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (2,"Salty bakami",550)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (2,"Stalking bakami",575)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (2,"Foraging bakami",600)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (2,"Ancestral bakami",625)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (2,"Murderous bakami",650)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (2,"Fortunate bakami",675)');

        DB::insert('insert into competences(id_skill, name, xp) VALUES (3,"Raw trout",50)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (3,"Raw salmon",70)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (3,"Leaping trout",50)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (3,"Leaping salmon",70)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (3,"Leaping sturgeon",80)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (3,"Small crystal urchin",310)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (3,"Medium crystal urchin",330)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (3,"Large crystal urchin",350)');

        DB::insert('insert into competences(id_skill, name, xp) VALUES (4,"One",0)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (4,"Two",1160)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (4,"Three",2607)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (4,"Four",5176)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (4,"Five",8286)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (4,"Six",11760)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (4,"Sevent",15835)');
        DB::insert('insert into competences(id_skill, name, xp) VALUES (4,"eight",21152)');





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CompetenceController.');
    }
}
