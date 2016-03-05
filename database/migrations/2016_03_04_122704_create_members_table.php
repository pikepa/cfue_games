<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('team_id')->unsigned();
            $table->integer('wk01')->unsigned();
            $table->integer('wk02')->unsigned();
            $table->integer('wk03')->unsigned();
            $table->integer('wk04')->unsigned();
            $table->integer('wk05')->unsigned();
            $table->integer('overall_position')->unsigned();
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
      Schema::drop('members');
    }
}
