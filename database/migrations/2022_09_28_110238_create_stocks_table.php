<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id('IDStock');
            $table->string('Address', 255);
            $table->integer('FreeCounts');
        });
    }


    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
