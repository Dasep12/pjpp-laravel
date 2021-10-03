<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePjppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjpps', function (Blueprint $table) {
            $table->id();
            $table->string('no_pjpp');
            $table->foreignId('kode_dc');
            $table->string('tipe_transaksi');
            $table->string('tipe_reparasi');
            $table->string('status');
            $table->longText('deskripsi');
            $table->string('pembuat');
            $table->string('atas_pembuat');
            $table->string('tgl_buat');
            $table->string('tgl_ubah');
            $table->string('status_dihapus');
            $table->string('utility');
            $table->string('unit_utility');
            $table->string('merk');
            $table->string('no_seri');
            $table->string('nik_pemakai');
            $table->string('nama_pemakai');
            $table->string('umur');
            $table->string('nama_pelanggan');
            $table->string('kode_pelanggan');
            $table->string('kode_gudang');
            $table->string('nama_gudang');
            $table->string('cabang');
            $table->string('unit');
            $table->string('tipe_rusak');
            $table->string('sla');
            $table->longText('penjelasan');
            $table->string('tgl_approve');
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
        Schema::dropIfExists('pjpps');
    }
}
