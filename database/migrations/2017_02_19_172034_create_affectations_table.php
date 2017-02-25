<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affectations',function(Blueprint $table){
            $table->increments('id');
            $table->integer('departement_id')->unsigned()->index();
            $table->integer('classe_id')->unsigned()->index();
            $table->integer('module_id')->unsigned()->index();
            $table->integer('cours_id')->unsigned()->index();
            $table->integer('heures');
            $table->float('coefficients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affectations');
    }
}
