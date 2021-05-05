<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('short_description');
            $table->text('content');
            $table->dateTime('created_at');
            $table->dateTime('modified_at');
            $table->dateTime('published_at');
            $table->string('seo_title', 60);
            $table->string('seo_description', 150);
            $table->string('slug')->unique();

            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('images_id');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
