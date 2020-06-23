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
            $table->bigIncrements('id');
            $table->string('avater')->default('avater/avater.svg');
            $table->string('name');
            $table->string('father');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('blood');
            $table->string('mobile');
            $table->string('address');
            $table->string('type');
            $table->string('email',100)->unique();
            $table->string('password')->default(bcrypt('123456'));
            $table->bigInteger('nid');
            $table->string('department');
            $table->string('designation');
            $table->unsignedBigInteger('salary');
            $table->string('country');
            $table->string('join');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('status')->default(1);
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
