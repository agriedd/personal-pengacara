<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->nullableMorphs('gambarable');
            
            // 1024px x 1024px
            $table->text('src_ori')->nullable();
            // 1024px
            $table->text('src_hd')->nullable();
            // 500px
            $table->text('src_md')->nullable();
            // 250px
            $table->text('src_sm')->nullable();
            // 100px
            $table->text('src_xm')->nullable();

            $table->string('alt')->nullable();

            $table->text('keterangan')->nullable();

            $table->string('location')->nullable();

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
        Schema::dropIfExists('gambars');
    }
}
