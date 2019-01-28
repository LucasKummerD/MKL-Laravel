<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->float('precio',5,2);
            $table->unsignedInteger('stock');
            $table->string('image')->default('prod_default.jpg');
            /* $table->binary('destacados'); */
            $table->unsignedInteger('category_id');
            
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}

