<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('item_product', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('item_id')->unsigned();
          $table->integer('product_id')->unsigned();

          $table->timestamps();

          //Relaciones
          //Si se elimina o actualiza un usuario se eliminan los post (cascade)
          $table->foreign('item_id')->references('id')->on('items')
                ->onDelete('cascade')
                ->onUpdate('cascade');

          $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
