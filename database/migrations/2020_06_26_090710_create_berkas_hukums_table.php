<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasHukumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_hukums', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('judul');
            $table->text('keterangan')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();

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
        Schema::dropIfExists('berkas_hukums');
    }
}
