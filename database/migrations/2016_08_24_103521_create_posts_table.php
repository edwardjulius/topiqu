<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users');
            $table->integer('threadid')->unsigned();
            $table->foreign('threadid')->references('id')->on('threads');
            $table->string('title');
            $table->string('url');
            $table->string('description');
            $table->integer('votecount')->default(0);
            $table->integer('commentcount')->default(0);
            $table->integer('totalcount')->default(0);
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
        Schema::drop('posts');
    }
}
