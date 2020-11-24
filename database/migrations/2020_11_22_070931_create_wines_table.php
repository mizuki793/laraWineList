<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    
        Schema::create('wines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('category');
            $table->string('taste');
            $table->string('food');
            $table->integer('food_matchPt');
            $table->string('message');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wines');
    }
}
