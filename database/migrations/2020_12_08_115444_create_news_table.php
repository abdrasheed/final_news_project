<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('content');
            $table->unsignedBigInteger('category_id');
            $table->integer('views');
            $table->boolean('featured')->default(false);
            $table->boolean('popular')->default(false);
            $table->boolean('most_read')->default(false);
            $table->boolean('most_recent')->default(false);
            $table->boolean('latest')->default(false);
            $table->text('image')->default('news-450x350-1.jpg');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('news');
    }
}
