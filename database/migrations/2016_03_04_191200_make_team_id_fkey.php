<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeTeamIdFkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');

         Schema::table('members', function (Blueprint $table) {
            $table->foreign('team_id')->unsigned()
                  ->references('id')->on('teams')
                  ->onDelete('cascade')->change();;
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('members', function (Blueprint $table) {
            $table->integer('team_id')->unsigned()->change();;

        });//
    }
}
