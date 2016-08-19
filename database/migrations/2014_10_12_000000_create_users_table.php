<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('username', 32)->unique();
            $table->string('email', 128)->unique();
            $table->string('fullname', 128);
            $table->string('password', 32);
            $table->date('dateofbirth');
            $table->boolean('confirmed')->default(0);
            $table->char('gender', 1);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
