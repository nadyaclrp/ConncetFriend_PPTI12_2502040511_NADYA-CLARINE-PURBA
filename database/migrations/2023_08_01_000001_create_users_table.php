<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->date('dob');
            $table->string('gender');
            // $table->unsignedBigInteger('state_id');
            // $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('isAdmin');
            $table->decimal('wallet')->default(0);
            // $table->unsignedBigInteger('interest_id');
            // $table->foreign('interest_id')->references('id')->on('interests')->onUpdate('cascade')->onDelete('cascade');
            $table->string('usernameLinkedin');
            $table->string('mobileNumb');
            $table->string('profession');
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
};
