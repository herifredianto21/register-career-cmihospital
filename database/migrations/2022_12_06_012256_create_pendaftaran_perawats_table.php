<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranPerawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_perawats', function (Blueprint $table) {
            $table->id('id_pendaftaran_perawat');
            $table->string('nama');
            $table->string('posisi');
            $table->string('tempat_lahir');
            $table->text('alamat_ktp');
            $table->string('jenis_kelamin');
            $table->string('bb_tb');
            $table->string('persetujuan_atribut');
            $table->string('email');
            $table->string('hp_pribadi');
            $table->string('hp_ayah_ibu');
            $table->string('agama');
            $table->text('domisili');
            $table->string('keahlian_bahasa');

            // field upload file
            $table->string('surat_lamaran');
            $table->string('ijazah');
            $table->string('skck');
            $table->string('surat_tanda_registrasi');
            $table->string('kartu_keluarga');
            $table->string('kartu_tanda_penduduk');
            $table->string('paklaring');
            $table->string('pas_foto');

            //field essai
            $table->text('penjelasan_singkat');
            $table->text('referensi_perusahaan');
            $table->text('pernyataan_penyakit');
            $table->text('bekerja_lembur');
            $table->text('bekerja_shift');
            $table->text('rekomendasi');
            $table->text('status_baca')->nullable();
            $table->text('status_aktif')->nullable();

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
        Schema::dropIfExists('pendaftaran_perawats');
    }
}
