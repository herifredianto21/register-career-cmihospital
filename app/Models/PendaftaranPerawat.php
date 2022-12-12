<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranPerawat extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_perawats';
    protected $primaryKey = 'id_pendaftaran_perawat';
    protected $fillable = [
        'id_pendaftaran_perawat',
        'nama',
        'posisi',
        'tempat_lahir',
        'alamat_ktp',
        'jenis_kelamin',
        'bb_tb',
        'persetujuan_atribut',
        'email',
        'hp_pribadi',
        'hp_ayah_ibu',
        'agama',
        'domisili',
        'keahlian_bahasa',
        'surat_lamaran',
        'ijazah',
        'skck',
        'surat_tanda_registrasi',
        'kartu_keluarga',
        'kartu_tanda_penduduk',
        'paklaring',
        'pas_foto',
        'penjelasan_singkat',
        'referensi_perusahaan',
        'pernyataan_penyakit',
        'bekerja_lembur',
        'bekerja_shift',
        'rekomendasi',
        'status_baca',
        'status_aktif'
    ];
}
