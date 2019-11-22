<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewapksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newapks', function (Blueprint $table) {
            $table->biginteger('ration');
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->biginteger('mobile')->nullable();
            $table->string('head');
            $table->string('housename');
            $table->string('taluk');
            $table->string('village');
            $table->string('panchayath');
            $table->integer('nofamily')->nullable();
            $table->biginteger('adhar')->nullable();
            $table->biginteger('account')->nullable();
            $table->string('ifsc')->nullable();
            $table->boolean('isbill')->default(false);
            $table->primary('ration');
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
        Schema::dropIfExists('newapks');
    }
}
