<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamazTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('namaz', function (Blueprint $table) {
            $table->id();
            $table->string('fajr')->nullable();
            $table->string('johr')->nullable();
            $table->string('asor')->nullable();
            $table->string('magrib')->nullable();
            $table->string('esha')->nullable();
            $table->string('jummah')->nullable();
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
        Schema::dropIfExists('namaz');
    }
}
