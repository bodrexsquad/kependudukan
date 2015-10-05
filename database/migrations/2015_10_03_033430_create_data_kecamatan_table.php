<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kecamatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kabupaten_id', 2);
            $table->string('kode_kecamatan', 2);
            $table->string('kecamatan', 200);
            $table->string('status');
            $table->integer('pbb_kec_kode', 2);
            $table->integer('arsip_kec_kode', 3);
            $table->integer('kodepos_kec_kode', 5);
            $table->integer('ramil_kec_kode', 4);
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
        Schema::table('data_kecamatan', function (Blueprint $table) {
            //
        });
    }
}