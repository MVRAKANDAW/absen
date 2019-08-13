<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('siswa_id');
            $table->date('date');
            $table->time('time_in');
            $table->time('time_out');
            $table->text('keterangan');
            $table->timestamps();

        });

         Schema::create('siswa', function(Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('no_telepon');
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
        Schema::dropIfExists('absen');
    }
}
