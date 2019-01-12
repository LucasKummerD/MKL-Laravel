<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records',function(Blueprint$table){
            $table->increments('id');
            $table->integer('product1');
            $table->integer('product2');
            $table->integer('product3');
            $table->integer('product4');
            $table->integer('product5');
            $table->integer('product6');
            $table->integer('product7');
            $table->integer('product8');
            $table->integer('product9');
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
        Schema::dropIfExists('records');
    }
}
