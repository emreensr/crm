<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userproduct', function (Blueprint $table) {

            $table->integer('staff_id')->unsigned();

            $table->integer('product_id')->unsigned();

            $table->foreign('staff_id')->references('id')->on('staff')

                ->onDelete('cascade');

            $table->foreign('product_id')->references('id')->on('product')

                ->onDelete('cascade');

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
