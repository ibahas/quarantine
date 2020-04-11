<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sicks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('bod');
            $table->string('city');
            $table->string('address');
            $table->string('personalstatus');
            $table->integer('gender');
            $table->bigInteger('user')->unsigned();
            $table->foreign('user')->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('status');
            $table->softDeletes();
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
        Schema::dropIfExists('sicks');
    }
}
