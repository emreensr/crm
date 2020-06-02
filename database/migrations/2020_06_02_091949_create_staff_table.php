<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->boolean('status')->default(0);
            $table->boolean('role')->default(0);
            $table->string('email');
            $table->string('company');
            $table->string('birthdate');
            $table->string('mobile');
            $table->string('website');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('position');
            $table->string('office');
            $table->string('age');
            $table->string('startdate');
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
        Schema::dropIfExists('staff');
    }
}
