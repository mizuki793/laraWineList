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
            $table->integer('category') ->nullable();
            $table->string('taste') ->nullable();
            $table->string('food')->nullable();
            $table->integer('food_matchPt')->nullable();
            $table->string('message')->nullable();
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
