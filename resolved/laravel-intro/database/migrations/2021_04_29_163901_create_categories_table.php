<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('slug')->unique();
            $table->string('seo_title', 60);
            $table->string('seo_description', 150);
            $table->binary('image');

            $table->unsignedBigInteger('parent_categories_id')->nullable();

            $table->foreign('parent_categories_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
