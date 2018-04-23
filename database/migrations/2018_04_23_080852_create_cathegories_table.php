<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCathegoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cathegories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('cathegories')->insert(['name' => 'Beletria']);
        DB::table('cathegories')->insert(['name' => 'Pre deti a mládež']);
        DB::table('cathegories')->insert(['name' => 'Životopisné']);
        DB::table('cathegories')->insert(['name' => 'Cudzojazyčné']);
        DB::table('cathegories')->insert(['name' => 'História']);
        DB::table('cathegories')->insert(['name' => 'Umenie']);
        DB::table('cathegories')->insert(['name' => 'Voľný čas']);
        DB::table('cathegories')->insert(['name' => 'Cestovanie']);
        DB::table('cathegories')->insert(['name' => 'Zdravie']);
        DB::table('cathegories')->insert(['name' => 'Učebnice']);
        DB::table('cathegories')->insert(['name' => 'Viac']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cathegories');
    }
}
