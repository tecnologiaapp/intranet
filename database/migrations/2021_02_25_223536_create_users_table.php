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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->tinyInteger('day')->nullable();
            $table->tinyInteger('month')->nullable();
            $table->enum('status', ['Inactive', 'Active'])->default('Active');
            $table->enum('sex', ['Male', 'Female', 'Other'])->default('Other');
            $table->enum('user_type', ['Linked', 'Contractor', 'Other'])->default('Contractor');
            $table->unsignedBigInteger('city_id')->default(1);
            $table->unsignedBigInteger('dependency_id')->default(1);
            $table->string('phone_number')->nullable();
            $table->string('cellular_number')->nullable();
            $table->string('ext_number')->nullable();
            $table->string('position')->nullable();
            $table->string('profession')->nullable();
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
