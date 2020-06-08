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
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('slug');

            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('vote_up')->default(0);
            $table->unsignedBigInteger('vote_down')->default(0);

            $table->unsignedBigInteger('id_admin')->nullable();

            $table->foreign('id_admin')->references('id')->on('admin')
                ->onDelete('set null')
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
        Schema::dropIfExists('articles');
    }
}
