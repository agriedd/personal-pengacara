<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('src');
            $table->text('keterangan')->nullable();
            $table->enum('status', [0, 1])->default(1);
            $table->nullableMorphs('berkasable');

            $table->unsignedBigInteger('size')->nullable();
            $table->string('extension')->nullable();
            $table->unsignedBigInteger('downloads')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas');
    }
}
