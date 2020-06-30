<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts', function (Blueprint $table) {
        $table->id();
        // $table->unsignedBigInteger('authorId');
        // $table->foreign('authorId')->references('id')->on('users')->onDelete('cascade');
        $table->string('title')->unique();
        $table->text('description');
        $table->boolean('active');
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
      Schema::dropIfExists('posts');
    }
}
