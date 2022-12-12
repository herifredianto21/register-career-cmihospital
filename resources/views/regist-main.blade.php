<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/job-app2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 06:40:09 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekrutmen CMI Hospital</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/iofrm-theme24.css">
</head>
<body>
    <div class="form-body on-top">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="https://www.cmihospital.com/asset.cmihospital.com/images/logo_cmi.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="{{asset('assets')}}/images/graphic6.svg" alt=""></div>
                    <div><h3>We’re Rekrutmen CMI Hospital!</h3></div>
                    <div><p>Fill the form, attach your  latest CV <br>and portfolio to get listed.</p></div>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form action="{{ route('registrasi') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif -->

                            @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>Success !</strong> {{ session('success') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Posisi Yang Dilamar*</label>

                                    @error('posisi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="posisi" id="dokter_umum" value="dokter umum">
                                        <label class="form-check-label" for="dokter_umum">
                                            Dokter Umum
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="posisi" id="perawat_pelaksana" value="perawat pelaksana">
                                        <label class="form-check-label" for="perawat_pelaksana">
                                            Perawat Pelaksana
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="posisi" id="bidan_pelaksana" value="bidan pelaksana">
                                        <label class="form-check-label" for="bidan_pelaksana">
                                            Bidan Pelaksana
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="posisi" id="apoteker" value="Apoteker-Farmasi">
                                        <label class="form-check-label" for="apoteker">
                                            Apoteker/Farmasi
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="posisi" id="analis_laboratorium" value="analis laboratorium">
                                        <label class="form-check-label" for="analis_laboratorium">
                                            Analis Laboratorium
                                        </label>
                                    </div>

                                    <br>
                                </div>
                            </div>
                            <br>

                            
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Tempat, Tanggal Lahir*</label>
                                    <input type="date" name="tempat_lahir" class="form-control" placeholder="Alamat">
                                    @error('tempat_lahir')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Alamat KTP*</label>
                                    <textarea class="form-control" name="alamat_ktp" placeholder="Alamat KTP"></textarea>
                                    @error('alamat_ktp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Jenis Kelamin*</label>
                                    
                                    @error('jenis_kelamin')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="laki-laki">
                                        <label class="form-check-label" for="laki_laki">
                                            Laki-laki
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>

                                    <br>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">BB/TB*</label>
                                    <input type="text" class="form-control" name="bb_tb" placeholder="Berat & Tinggi badan">
                                    @error('bb_tb')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Persetujuan untuk tidak memakai atribut keagamaan saat pelayanan yang berhubungan dengan pasien (Nakes Perempuan)*</label>
                                    
                                    @error('persetujuan_atribut')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="persetujuan_atribut" id="ya" value="ya">
                                        <label class="form-check-label" for="ya">
                                            ya
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="persetujuan_atribut" id="tidak" value="tidak">
                                        <label class="form-check-label" for="tidak">
                                            tidak
                                        </label>
                                    </div>

                                    <br>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Alamat Email*</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Nomor Handphone (Pribadi)*</label>
                                    <input type="text" name="hp_pribadi" class="form-control" placeholder="Nomor Handphone (Pribadi)">
                                    @error('hp_pribadi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Nomor Handphone (Ortu)*</label>
                                    <input type="text" name="hp_ayah_ibu" class="form-control" placeholder="Nomor Handphone (ortu)">
                                    @error('hp_ayah_ibu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Agama*</label>

                                    @error('agama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="agama" id="islam" value="islam">
                                        <label class="form-check-label" for="islam">
                                            Islam
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="agama" id="kristen" value="kristen">
                                        <label class="form-check-label" for="kristen">
                                            Kristen
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="agama" id="khatolik" value="khatolik">
                                        <label class="form-check-label" for="khatolik">
                                            Khatolik
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="agama" id="hindu" value="hindu">
                                        <label class="form-check-label" for="hindu">
                                            Hindu
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="agama" id="budha" value="budha">
                                        <label class="form-check-label" for="budha">
                                            Budha
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-control" type="radio" name="agama" id="lainnya" value="lainnya">
                                        <label class="form-check-label" for="lainnya">
                                            Lainnya
                                        </label>
                                    </div>

                                    <br>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Alamat Domisili (saat ini)</label>
                                    <textarea class="form-control" name="domisili" placeholder="Alamat domisili"></textarea>
                                    @error('domisili')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Keahlian Bahasa*</label>
                                    <input type="text" name="keahlian_bahasa" class="form-control" placeholder="Keahlian bahasa">
                                    @error('keahlian_bahasa')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Upload Surat Lamaran</label>
                                    <div class="custom-file">
                                        <input type="file" name="surat_lamaran" class="custom-file-input" id="validatedSuratLamaran">
                                        <label class="custom-file-label" for="validatedSuratLamaran">CV (Resume)</label>
                                    </div>
                                    @error('surat_lamaran')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Upload Ijazah</label>

                                    <div class="custom-file">
                                        <input type="file" name="ijazah" class="custom-file-input" id="validatedIjazah">
                                        <label class="custom-file-label" for="validatedIjazah">Ijazah</label>
                                    </div>
                                    @error('ijazah')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Upload SKCK</label>
                                    <div class="custom-file">
                                        <input type="file" name="skck" class="custom-file-input" id="validatedSkck">
                                        <label class="custom-file-label" for="validatedSkck">SKCK</label>
                                    </div>
                                    @error('skck')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Upload STR Aktif (khusus nakes)</label>
                                    <div class="custom-file">
                                        <input type="file" name="surat_tanda_registrasi" class="custom-file-input" id="validatedStr">
                                        <label class="custom-file-label" for="validatedStr">STR Aktif</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Upload Kartu Keluarga</label>
                                    <div class="custom-file">
                                        <input type="file" name="kartu_keluarga" class="custom-file-input" id="validatedKartuKeluarga">
                                        <label class="custom-file-label" for="validatedKartuKeluarga">Kartu Keluarga</label>
                                    </div>
                                    @error('kartu_keluarga')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Upload KTP</label>
                                    <div class="custom-file">
                                        <input type="file" name="kartu_tanda_penduduk" class="custom-file-input" id="validatedKtp">
                                        <label class="custom-file-label" for="validatedKtp">Kartu Tanda Penduduk</label>
                                    </div>
                                    @error('kartu_tanda_penduduk')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for="">Upload Paklaring/Surat Pengalaman Kerja, Sertifikat Pelatihan & Berkas Tambahan lainnya (diupload dalam 1 file)</label>
                                    <div class="custom-file">
                                        <input type="file" name="paklaring" class="custom-file-input" id="validatedPaklaring">
                                        <label class="custom-file-label" for="validatedPaklaring">Lampiran</label>
                                    </div>
                                    
                                </div>
                                @error('paklaring')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label for="">Upload Pas Foto Latar Merah</label>
                                    <div class="custom-file">
                                        <input type="file" name="pas_foto" class="custom-file-input" id="validatedFoto">
                                        <label class="custom-file-label" for="validatedFoto">Pas Foto Merah</label>
                                    </div>
                                    @error('pas_foto')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h4>Soal Essai</h4>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for=""> <b> 1 </b>. Jelaskan secara singkat, padat dan jelas pengetahuan anda tentang Poli Klinik</label>
                                    <textarea class="form-control" name="penjelasan_singkat" placeholder="Jawab"></textarea>
                                    @error('penjelasan_singkat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for=""> <b> 2 </b>. Apakah anda keberatan jika kami meminta referensi pada perusahaan dimana anda bekerja saat ini atau sebelumnya?</label>
                                    <label for="">Jika bersedia, sebutkan referensinya! Jika tidak bersedia, sebutkan alasannya!</label>
                                    <textarea class="form-control" name="referensi_perusahaan" placeholder="Jawab"></textarea>
                                    @error('referensi_perusahaan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for=""> <b> 3 </b>. Apakah anda pernah menderita sakit yang memerlukan perawatan khusus yang lama ? </label>
                                    <label for=""> Jika pernah, sebutkan tempat dan sebabnya!</label>
                                    <textarea class="form-control" name="pernyataan_penyakit" placeholder="Jawab"></textarea>
                                    @error('pernyataan_penyakit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for=""> <b> 4 </b>. Apakah anda bersedia bekerja lembur di hari biasa maupun di hari libur ?</label>
                                    <textarea class="form-control" name="bekerja_lembur" placeholder="Jawab"></textarea>
                                    @error('bekerja_lembur')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for=""> <b> 5 </b>. Apakah anda bersedia untuk bekerja shift sesuai aturan yang telah ditentukan pidak MSDM klinik utama cmi ?</label>
                                    <textarea class="form-control" name="bekerja_shift" placeholder="Jawab"></textarea>
                                    @error('bekerja_shift')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <label for=""> <b> 6 </b>. Rekomendasi dari ?</label>
                                    <textarea class="form-control" name="rekomendasi" placeholder="Jawab"></textarea>
                                    @error('rekomendasi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <input type="submit" class="ibtn less-padding">Submit Application</button>
                                    </div>
                                </div>
                            </div> --}}

                            <button type='submit' class="btn btn-success" value="Submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/job-app2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 06:40:14 GMT -->
</html>