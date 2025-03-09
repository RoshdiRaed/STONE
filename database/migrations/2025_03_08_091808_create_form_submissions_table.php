<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSubmissionsTable extends Migration
{
    public function up()
    {
        Schema::create('form_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('dob');
            $table->string('gender');
            $table->text('address')->nullable();
            $table->string('skills')->nullable();
            $table->string('resume')->nullable(); // Store file path
            $table->string('profile_picture')->nullable(); // Store file path
            $table->string('website')->nullable();
            $table->string('password');
            $table->boolean('subscribe')->default(false);
            $table->string('contact_method');
            $table->time('preferred_time')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_submissions');
    }
}
