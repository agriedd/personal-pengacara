<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('id_article')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();

            $table->string('slug')->unique();
            $table->string('location')->nullable();
            $table->text('catatan')->nullable();
            $table->bigInteger('status')->default(0);
            $table->bigInteger('full')->default(0);

            $table->foreign('id_article')->references('id')->on('article')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->foreign('id_admin')->references('id')->on('admin')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('halamen');
    }
}
