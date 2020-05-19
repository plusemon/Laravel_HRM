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
            $table->string('user_avater')->default('img/avatar.svg');
            $table->string('name');
            $table->string('fathers_name');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('blood_group');
            $table->bigInteger('mobile_number');
            $table->string('address');
            $table->string('user_type');
            $table->string('email',100)->unique();
            $table->string('password')->default('1234456');
            $table->bigInteger('nid');
            $table->string('department');
            $table->string('designation');
            $table->unsignedBigInteger('salary');
            $table->unsignedBigInteger('salary_paid')->nullable();
            $table->string('country');
            $table->string('join_date');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('status')->nullable();
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
