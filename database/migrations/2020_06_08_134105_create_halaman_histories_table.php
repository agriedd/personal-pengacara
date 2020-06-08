<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman_histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title');
            $table->text('body')->nullable();
            $table->text('catatan')->nullable();
            $table->unsignedBigInteger('vote_up')->default(0);
            $table->unsignedBigInteger('vote_down')->default(0);

            $table->unsignedBigInteger('id_halaman')->nullable();
            $table->foreign('id_halaman')->references('id')->on('halaman')
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
        Schema::dropIfExists('halaman_histories');
    }
}
