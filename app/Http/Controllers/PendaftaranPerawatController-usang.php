<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranPerawat;
use Illuminate\Http\Request;

class PendaftaranPerawatController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function store(Request $request){

        $request->validate([
            'nama'=>'required|max:255',
            'posisi'=>'required',
            'tempat_lahir'=>'required',
            'alamat_ktp'=>'required',
            'jenis_kelamin'=>'required',
            'bb_tb'=>'required',
            'persetujuan_atribut'=>'required',
            'email'=>'required',
            'hp_pribadi'=>'required|numeric',
            'hp_ayah_ibu'=>'required|numeric',
            'agama'=>'required',
            'domisili'=>'required',
            'keahlian_bahasa'=>'required',
            'surat_lamaran'=>'nullable|file',
            'ijazah'=>'nullable|file',
            'skck'=>'nullable|file',
            'surat_tanda_registrasi'=>'nullable|file',
            'kartu_keluarga'=>'nullable|file',
            'kartu_tanda_penduduk'=>'nullable|file',
            'paklaring'=>'nullable|file',
            'pas_foto'=>'required|image|mimes:png,jpg,jpeg',
            'penjelasan_singkat'=>'required',
            'referensi_perusahaan'=>'required',
            'pernyataan_penyakit'=>'required',
            'bekerja_lembur'=>'required',
            'bekerja_shift'=>'required',
            'rekomendasi'=>'required'
        ]);
// dd($request->input('posisi'));
        $regist = new PendaftaranPerawat();
        $regist->nama = $request->input('nama');
        $regist->posisi = $request->input('posisi');
        $regist->tempat_lahir = $request->input('tempat_lahir');
        $regist->alamat_ktp = $request->input('alamat_ktp');
        $regist->jenis_kelamin = $request->input('jenis_kelamin');
        $regist->bb_tb = $request->input('bb_tb');
        $regist->persetujuan_atribut = $request->input('persetujuan_atribut');
        $regist->email = $request->input('email');
        $regist->hp_pribadi = $request->input('hp_pribadi');
        $regist->hp_ayah_ibu = $request->input('nama');
        $regist->agama = $request->input('agama');
        $regist->domisili = $request->input('domisili');
        $regist->keahlian_bahasa = $request->input('keahlian_bahasa');

        $regist->penjelasan_singkat = $request->input('penjelasan_singkat');
        $regist->referensi_perusahaan = $request->input('referensi_perusahaan');
        $regist->pernyataan_penyakit = $request->input('pernyataan_penyakit');
        $regist->bekerja_lembur = $request->input('bekerja_lembur');
        $regist->bekerja_shift = $request->input('bekerja_shift');
        $regist->rekomendasi = $request->input('rekomendasi');
        $regist->status_baca = $request->input('status_baca');
        $regist->status_aktif = $request->input('status_aktif');

        if($request->hasFile('surat_lamaran'))
        {
            $sl = $request->file('surat_lamaran');
            $extenstion = $sl->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $sl->move('storage/uploads/surat lamaran/', $filename);
            $regist->surat_lamaran = $filename;
        }

        if($request->hasFile('ijazah'))
        {
            $ij = $request->file('ijazah');
            $extenstion = $ij->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $ij->move('storage/uploads/ijazah/', $filename);
            $regist->ijazah = $filename;
        }

        if($request->hasFile('skck'))
        {
            $sk = $request->file('skck');
            $extenstion = $sk->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $sk->move('storage/uploads/skck/', $filename);
            $regist->skck = $filename;
        }

        if($request->hasFile('surat_tanda_registrasi'))
        {
            $str = $request->file('surat_tanda_registrasi');
            $extenstion = $str->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $str->move('storage/uploads/surat tanda registrasi/', $filename);
            $regist->surat_tanda_registrasi = $filename;
        }

        if($request->hasFile('kartu_keluarga'))
        {
            $kk = $request->file('kartu_keluarga');
            $extenstion = $kk->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $kk->move('storage/uploads/kartu keluarga/', $filename);
            $regist->kartu_keluarga = $filename;
        }

        if($request->hasFile('kartu_tanda_penduduk'))
        {
            $ktp = $request->file('kartu_tanda_penduduk');
            $extenstion = $ktp->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $ktp->move('storage/uploads/kartu tanda penduduk/', $filename);
            $regist->kartu_tanda_penduduk = $filename;
        }

        if($request->hasFile('paklaring'))
        {
            $pk = $request->file('paklaring');
            $extenstion = $pk->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $pk->move('storage/uploads/paklaring/', $filename);
            $regist->paklaring = $filename;
        }

        if($request->hasFile('pas_foto'))
        {
            $pf = $request->file('pas_foto');
            $extenstion = $pf->getClientOriginalName();
            $filename = time().'.'.$extenstion;
            $pf->move('storage/uploads/pas foto/', $filename);
            $regist->pas_foto = $filename;
        }


        $regist->save();

        // dd($regist);
        return redirect('/')->with('success','successfully saved');
    }
}
