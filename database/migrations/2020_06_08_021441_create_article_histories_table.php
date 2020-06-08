<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_histories', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('body');

            $table->string('location')->nullable();
            $table->string('tags')->nullable();

            $table->dateTime('published_at')->nullable();

            $table->unsignedBigInteger('id_article')->nullable();
            $table->foreign('id_article')->references('id')->on('article')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('article_histories');
    }
}
