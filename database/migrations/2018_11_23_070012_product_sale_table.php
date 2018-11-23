<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_sale', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('product_id')->unsigned();
          $table->integer('sale_id')->unsigned();

          $table->timestamps();

          //Relaciones
          //Si se elimina o actualiza un usuario se eliminan los post (cascade)
          $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

          $table->foreign('sale_id')->references('id')->on('sales')
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
