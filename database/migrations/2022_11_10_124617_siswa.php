<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa', 100)->required();
            $table->string('tempat', 50)->required();
            $table->date('tgl_lahir')->required();
            $table->string('alamat', 100)->required();
            $table->string('hanphone', 100)->required();
            $table->string('jk', 20)->required();
            // $table->integer('id_kelas', 20);
            // $table->integer('id_sekolah', 20);
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
        Schema::dropIfExists('Siswas');
    }
}
