<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('dosen', function (Blueprint $table) {
            $table->id('Kd_dosen', 7);
            $table->string('nama');
            $table->string('email');
            $table->string('alamat');
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('masa_jabatan');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
