<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppealbillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appealbills', function (Blueprint $table) {
            $table->bigIncrements('id')->uniqid();
            $table->bigInteger('ration_id');
            $table->integer('amount');
            $table->foreign('ration_id')->references('ration')->on('appeals')->onDelete('cascade');
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
        Schema::dropIfExists('appealbills');
    }
}
