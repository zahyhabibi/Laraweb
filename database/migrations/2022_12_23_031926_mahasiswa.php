<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table){
            $table->id('Npm', 7);
            $table->string('Nama');
            $table->string('alamat');
            $table->string('Semester');
            $table->string('jml_sks');
            $table->integer('NTugas');
            $table->integer('NKehadiran');
            $table->integer('NUTS');
            $table->integer('NUAS');
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
        Schema::dropIfExists('mahasiswa');
            // $table->id('Npm', 7);
            // $table->string('Nama');
            // $table->string('alamat');
            // $table->string('Semester');
            // $table->string('jml_sks');
            // $table->integer('NTugas');
            // $table->integer('NKehadiran');
            // $table->integer('NUTS');
            // $table->integer('NUAS');
    }
}