<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_admin")->nullable();

            $table->string("nama")->nullable();
            $table->string("keterangan");
            $table->string("catatan")->nullable();
            $table->unsignedInteger("status")->default(1);

            $table->timestamps();

            $table->foreign("id_admin")->references("id")->on("admin")
                ->onDelete("set null")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
