<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->unsigned();

            // $table->string('file',128)->nullable();
            $table->double('total',8,2);

            $table->timestamps();

            //Relaciones
            //Si se elimina o actualiza un usuario se eliminan los post (cascade)
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
        Schema::dropIfExists('buys');
    }
}
