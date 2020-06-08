<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_user');

            $table->enum("jenis_kelamin", ['l','p'])->nullable();
            $table->string("tempat_lahir")->nullable();
            $table->string("tanggal_lahir")->nullable();
            $table->string("alamat")->nullable();
            $table->string("agama")->nullable();

            //kontak

            $table->string("whatsapp")->nullable();
            $table->string("nomor_hp")->nullable();
            $table->string("telepon")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("email")->nullable();
            $table->string("twitter")->nullable();

            $table->string("kontak")->nullable();

            $table->string("keterangan")->nullable();
            
            $table->timestamps();

            $table->foreign("id_user")->references("id")->on("user")
                ->onDelete("cascade")
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
        Schema::dropIfExists('informasi_users');
    }
}
