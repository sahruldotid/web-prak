<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->char('gender', 2)->nullable();
            $table->string('education')->nullable();
            $table->string('skill')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile_pic')->default('https://hackerone.com/assets/avatars/default-71a302d706457f3d3a31eb30fa3e73e6cf0b1d677b8fa218eaeaffd67ae97918.png');
            $table->integer('price')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
