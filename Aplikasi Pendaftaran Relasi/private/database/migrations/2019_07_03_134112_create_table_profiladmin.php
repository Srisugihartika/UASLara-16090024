<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfiladmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiladmin_tbl', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp',20);
            $table->string('email')->unique();
            $table->string('jabatan');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('profiladmin_tbl');
    }
}
