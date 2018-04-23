<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->timestamps();
        });

        DB::table('availabilities')->insert(['label' => 'na sklade']);
        DB::table('availabilities')->insert(['label' => 'vypredané']);
        DB::table('availabilities')->insert(['label' => 'predpredaj']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('availabilities');
    }
}
