<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepreneurshipsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('entrepreneurships', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('slug');
         $table->longText('content');
         $table->string('image')->nullable();
         $table->enum('status', ['Inactive', 'Active'])->default('Active');
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
      Schema::dropIfExists('entrepreneurships');
   }
}
