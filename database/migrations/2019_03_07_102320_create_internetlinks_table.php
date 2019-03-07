<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternetlinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internetlinks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('edumat_id')->unsigned();
            $table->foreign('edumat_id')->references('id')->on('edumats');
            $table->text('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internetlinks');
    }
}
