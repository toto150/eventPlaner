<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account');
            $table->string('password');
            $table->string('headImg');
            $table->string('name');
            $table->string('nationality');
            $table->string('city');
            $table->string('gender');
            $table->string('birthday');
            $table->string('address');
            $table->string('nickName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accounts');
    }
}
