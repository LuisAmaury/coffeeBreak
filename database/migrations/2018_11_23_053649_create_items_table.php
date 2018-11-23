<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',128);
            $table->string('slug',128)->unique();//URL amigable, debe de ser de la misma extension que nombre
            $table->enum('unitType', ['ML','GR','REBANADA'])->default('GR');
            $table->integer('supplier_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->double('price', 8, 2);
            $table->unsignedInteger('stock');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('supplier_id')->references('id')->on('suppliers')
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
        Schema::dropIfExists('items');
    }
}
