<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUpdateSlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userUpdateSlips', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('picture_slip');
          $table->string('status_check_yet');
          $table->string('admin_id');
          $table->string('status_slip');
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
        Schema::dropIfExists('userUpdateSlips');
    }
}
