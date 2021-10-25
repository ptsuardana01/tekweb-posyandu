<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('tmpt_lahir', 100);
            $table->string('tgl_lahir', 100);
            $table->text('alamat', 255);
            $table->string('nama_ayah', 255);
            $table->string('nama_ibu', 255);
            $table->string('nik_ayah', 16)->unique();
            $table->string('nik_ibu', 16)->unique();
            $table->string('telp', 15);
            $table->string('email', 100);
            $table->integer('umur');
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('lk');
            $table->timestamps();
        });


        Schema::create('bumil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('nik', 16)->unique();
            $table->string('tmpt_lahir', 100);
            $table->string('tgl_lahir', 100);
            $table->text('alamat', 255);
            $table->string('telp', 15);
            $table->string('email', 100);
            $table->integer('umur');
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('lila');
            $table->timestamps();
        });

        Schema::create('petugas_posyandu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('nik', 16)->unique();
            $table->string('tmpt_lahir', 100);
            $table->string('tgl_lahir', 100);
            $table->text('alamat', 255);
            $table->string('telp', 15);
            $table->string('email', 100);
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
        Schema::dropIfExists('balita');
        Schema::dropIfExists('bumil');
        Schema::dropIfExists('petugas_posyandu');
    }
}
