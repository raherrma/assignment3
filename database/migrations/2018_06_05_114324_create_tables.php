<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('items', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('category');
            $table->string('posted_by');
            $table->timestamps('created_at');
        });
        Schema::create('categories', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('total_entries');
            $table->timestamps('created_at');
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
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
        Schema::dropIfExists('items');
        Schema::dropIfExists('categories');
        Schema::ibase_drop_db('posts');
    }
}
