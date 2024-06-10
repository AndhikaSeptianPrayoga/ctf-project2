<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id_user(); // This creates an auto-incrementing 'id' column
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('file')->nullable();
            $table->tinyInteger('role')->default(0);
            $table->timestamps(); // If you decide to use timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
