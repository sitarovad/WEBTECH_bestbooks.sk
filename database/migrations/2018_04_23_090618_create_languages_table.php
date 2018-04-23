<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->timestamps();
        });

        DB::table('languages')->insert(['label' => 'slovenský']);
        DB::table('languages')->insert(['label' => 'český']);
        DB::table('languages')->insert(['label' => 'anglický']);
        DB::table('languages')->insert(['label' => 'nemecký']);
        DB::table('languages')->insert(['label' => 'španielsky']);
        DB::table('languages')->insert(['label' => 'francúzsky']);
        DB::table('languages')->insert(['label' => 'iný']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
