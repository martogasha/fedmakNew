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
            $table->string('idno')->unique();
            $table->integer('phone')->unique();
            $table->integer('property_id')->nullable();
            $table->integer('house_id')->nullable();
            $table->string('houseType')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('role')->default(2);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(\Illuminate\Support\Facades\Hash::make('123456'));
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
