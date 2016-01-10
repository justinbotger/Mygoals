<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->string('gender', 1)->default('...')->nullable();
            $table->timestamp('date_of_birth')->default('...')->nullable();
            $table->integer('phone_number')->default('...')->nullable();
            $table->string('profile_picture')->default('...')->nullable();
            $table->string('about')->default('...')->nullable();
            $table->string('work_school')->default('...')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Profiles');
    }
}
