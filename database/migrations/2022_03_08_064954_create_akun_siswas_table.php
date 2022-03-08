<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn_siswa')->uniqid();
            $table->string('nama_siswa');
            $table->string('tahun_ajaran');
            $table->string('email_siswa')->uniqid();
            $table->string('password_siswa');
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
        Schema::dropIfExists('akun_siswas');
    }
}
