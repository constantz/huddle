<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sent_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('sender_id')->unsigned();
            $table->foreign('sender_id')->references('id')->on('users');
            $table->integer('recipient_id')->unsigned();
            $table->foreign('recipient_id')->references('id')->on('users');
            $table->integer('message_id')->unsigned();
            $table->foreign('message_id')->references('id')->on('messages');
            $table->boolean('read')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sent_messages');
    }
}
