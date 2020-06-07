<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user")->nullable();
            $table->timestamps();

            $table->string("email")->nullable();
            $table->string("username")->nullable();
            $table->string("password")->nullable();

            //oauth
            $table->string("provider")->nullable();
            $table->string("provider_id")->nullable();

            $table->rememberToken();

            $table->string("hint")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
