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
        // creates a users table with the following blueprints
        Schema::create('users', function (Blueprint $table) {
            // bigIncrements means that the id is increase by 1 with each new iteration
            $table->bigIncrements('id');
            // name is a string
            $table->string('name');
            // email is a string that is unique to each user
            $table->string('email')->unique();
            // two users cannot have the same username, it is unique at DB level
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
