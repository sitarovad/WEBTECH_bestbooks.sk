<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcathegoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcathegories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('cathegory_id');
            $table->foreign('cathegory_id')->references('id')->on('cathegories');
            $table->timestamps();
        });

        //beletria
        DB::table('subcathegories')->insert(['name' => 'Romány', 'cathegory_id' => '1']);
        DB::table('subcathegories')->insert(['name' => 'Klasická literatúra', 'cathegory_id' => '1']);
        DB::table('subcathegories')->insert(['name' => 'Detektívky', 'cathegory_id' => '1']);
        DB::table('subcathegories')->insert(['name' => 'Dráma', 'cathegory_id' => '1']);
        DB::table('subcathegories')->insert(['name' => 'Sci-fi, fantasy', 'cathegory_id' => '1']);
        //pre deti a mladez
        DB::table('subcathegories')->insert(['name' => 'Dobrodružná', 'cathegory_id' => '2']);
        DB::table('subcathegories')->insert(['name' => 'Pre najmenších', 'cathegory_id' => '2']);
        DB::table('subcathegories')->insert(['name' => 'Sci-fi, fantasy', 'cathegory_id' => '2']);
        DB::table('subcathegories')->insert(['name' => 'Rozprávky', 'cathegory_id' => '2']);
        //zivotopisne
        DB::table('subcathegories')->insert(['name' => 'Umelci', 'cathegory_id' => '3']);
        DB::table('subcathegories')->insert(['name' => 'Športovci', 'cathegory_id' => '3']);
        DB::table('subcathegories')->insert(['name' => 'Historické osobnosti', 'cathegory_id' => '3']);
        //cuzdojazycne
        DB::table('subcathegories')->insert(['name' => 'Anglická beletria', 'cathegory_id' => '4']);
        DB::table('subcathegories')->insert(['name' => 'Dvojjazyčné vydania', 'cathegory_id' => '4']);
        //historia
        DB::table('subcathegories')->insert(['name' => 'Dejiny krajín', 'cathegory_id' => '5']);
        DB::table('subcathegories')->insert(['name' => 'Dejiny sveta', 'cathegory_id' => '5']);
        //umenie
        DB::table('subcathegories')->insert(['name' => 'Fotografia', 'cathegory_id' => '6']);
        DB::table('subcathegories')->insert(['name' => 'Hudba', 'cathegory_id' => '6']);
        DB::table('subcathegories')->insert(['name' => 'Dizajn', 'cathegory_id' => '6']);
        DB::table('subcathegories')->insert(['name' => 'Architektúra', 'cathegory_id' => '6']);
        //volny cas
        DB::table('subcathegories')->insert(['name' => 'Záhrada', 'cathegory_id' => '7']);
        DB::table('subcathegories')->insert(['name' => 'Šport', 'cathegory_id' => '7']);
        //cestovanie
        DB::table('subcathegories')->insert(['name' => 'Mapy, atlasy', 'cathegory_id' => '8']);
        DB::table('subcathegories')->insert(['name' => 'Turistickí sprievodcovia', 'cathegory_id' => '8']);
        //zdravie
        DB::table('subcathegories')->insert(['name' => 'Alternatívna medicína', 'cathegory_id' => '9']);
        DB::table('subcathegories')->insert(['name' => 'Diéty, zdravá výživa', 'cathegory_id' => '9']);
        //ucebnice
        DB::table('subcathegories')->insert(['name' => 'Slovníky, jazykové učebnice', 'cathegory_id' => '10']);
        DB::table('subcathegories')->insert(['name' => 'Iné učebnice a encyklopédie', 'cathegory_id' => '10']);
        //viac
        DB::table('subcathegories')->insert(['name' => 'Zápisníky', 'cathegory_id' => '11']);
        DB::table('subcathegories')->insert(['name' => 'Iné', 'cathegory_id' => '11']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcathegories');
    }
}
