<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('author_id');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->integer('publisher_id');
            $table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('cascade');
            $table->integer('no_of_pages');
            $table->string('edition');
            $table->string('price')->nullable();
            $table->string('image_url');
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
        Schema::dropIfExists('books');
    }
}
