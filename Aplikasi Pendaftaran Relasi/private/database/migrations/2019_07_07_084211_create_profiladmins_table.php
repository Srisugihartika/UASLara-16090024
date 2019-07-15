<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfiladminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiladmins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp',20);
            $table->string('email')->unique();
            $table->string('jabatan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiladmins');
    }
}
