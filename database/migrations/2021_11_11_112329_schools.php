<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name',250);
            $table->string('description',1000);
            $table->string('image',250);
            $table->string('location',250);
            $table->string('province',250);
            $table->string('urlWeb',100);
            $table->string('urlTour',100);
            $table->string('coorX',500);
            $table->string('coorY',500);
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
