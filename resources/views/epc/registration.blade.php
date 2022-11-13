@extends('layout.layout')
@section('content')
    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="bg-epc-registration">
            <div class="container-batik"><img src="{{ asset('img/batik-panjang.png') }}" class="batik img-fluid"></div>
            @include('partials.navbar')
            <div class="container mt-3">
                <div class="container container-form">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('img/epc-header.png') }}" class="img-fluid" alt="lambang EPC 2023">
                    </div>
                    <h1 class="text-center fst-italic">Registration</h1>
                    <div class="body-form mt-3">
                        <div class="section-form mb-3">1. Akun Tim</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="namatim" class="form-label">
                                    Nama Tim
                                </label>
                                <input required type="text" class="form-control" id="namatim" name="namatim"
                                    placeholder="Nama Tim">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">
                                    Password
                                </label>
                                <input required type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="username" class="form-label">
                                    Username Tim
                                </label>
                                <input required type="text" class="form-control" id="usernametim" name="username"
                                    placeholder="Username Tim">
                            </div>
                            <div class="col-md-6">
                                <label for="confpassword" class="form-label">
                                    Confirm Password
                                </label>
                                <input required type="password" class="form-control" id="confpassword" name="confpassword"
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="my-4"></div>
                        <div class="section-form mb-3">2. Biodata Tim</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="asalsekolah" class="form-label">
                                    Asal Sekolah
                                </label>
                                <input required type="text" class="form-control" id="asalsekolah" name="asalsekolah"
                                    placeholder="Asal Sekolah">
                            </div>
                            <div class="col-md-6">
                                <label for="kota" class="form-label">
                                    Kota
                                </label>
                                <input required type="text" class="form-control" id="kota" name="kota"
                                    placeholder="Kota">
                            </div>
                        </div>
                        <div class="my-4"></div>
                        {{-- Ketua --}}
                        <div class="section-form mb-3 bio-header">Ketua</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama_ketua" class="form-label">
                                    Nama Ketua
                                </label>
                                <input required type="text" class="form-control" id="nama_ketua" name="nama_ketua"
                                    placeholder="Nama Ketua">
                            </div>
                            <div class="col-md-6">
                                <label for="nisn_ketua" class="form-label">
                                    NISN Ketua
                                </label>
                                <input required type="text" class="form-control" id="nisn_ketua" name="nisn_ketua"
                                    placeholder="NISN Ketua">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nohp_ketua" class="form-label">
                                    No. HP
                                </label>
                                <input required type="text" class="form-control" id="nohp_ketua" name="nohp_ketua"
                                    placeholder="No HP">
                            </div>
                            <div class="col-md-6">
                                <label for="email_ketua" class="form-label">
                                    Email
                                </label>
                                <input required type="email" class="form-control" id="email_ketua" name="email_ketua"
                                    placeholder="Email">
                            </div>
                        </div>
                        {{-- End of Ketua --}}

                        {{-- Anggota 1 --}}
                        <div class="section-form mb-3 bio-header">Anggota 1</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama_anggota1" class="form-label">
                                    Nama Anggota 1
                                </label>
                                <input required type="text" class="form-control" id="nama_anggota1"
                                    name="nama_anggota1" placeholder="Nama Anggota 1">
                            </div>
                            <div class="col-md-6">
                                <label for="nisn_anggota1" class="form-label">
                                    NISN
                                </label>
                                <input required type="text" class="form-control" id="nisn_anggota1"
                                    name="nisn_anggota1" placeholder="NISN Anggota 1">
                            </div>
                        </div>
                        {{-- End of Anggota 1 --}}

                        {{-- Berkas --}}
                        <div class="section-form mb-3">3. Dokumen Pendukung</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="upload_pas_foto" class="form-label fs-5 d-block">
                                    Pas Foto 4x3
                                </label>
                                <label for="foto_ketua" class="form-label">Ketua</label>
                                <input required type="file" class="form-control mb-3" id="foto_ketua"
                                    name="foto_ketua">
                                <label for="foto_anggota1" class="form-label">Anggota 1</label>
                                <input required type="file" class="form-control" id="foto_anggota1"
                                    name="foto_anggota1">
                                <div class="small">
                                    <label class="form-label mt-2 d-block">Format Penamaan :
                                        pasfoto_[posisi]_[nama]</label>
                                    <label class="form-label d-block">Format: .jpg, max. size 5 MB</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="upload_pas_foto" class="form-label fs-5 d-block">
                                    Scan Kartu Pelajar
                                </label>
                                <label for="kartu_pelajar_ketua" class="form-label">Ketua</label>
                                <input required type="file" class="form-control mb-3" id="kartu_pelajar_ketua"
                                    name="kartu_pelajar_ketua">
                                <label for="kartu_pelajar_anggota1" class="form-label">Anggota 1</label>
                                <input required type="file" class="form-control" id="kartu_pelajar_anggota1"
                                    name="kartu_pelajar_anggota1">
                                <div class="small">
                                    <label class="form-label mt-2 d-block">Format Penamaan :
                                        kartupelajar_[posisi]_[nama]</label>
                                    <label class="form-label d-block">Format: .jpg, max. size 5 MB</label>
                                </div>
                            </div>
                        </div>
                        {{-- End of Berkas --}}
                        {{-- Pembayaran --}}
                        <div class="section-form mb-3">4. Pembayaran</div>
                        <div class="box-pembayaran d-flex justify-content-center mb-3">
                            <div class="container">
                                <p>Peserta membayar uang pendaftaran sebesar Rp @foreach ($registration_fee as $item)
                                        {{ $item->registration_fee }}
                                    @endforeach per tim melalui:
                                    (Jangan lupa menambahkan angka 1 di akhir nominal pendaftaran!)</p>
                                <ul>
                                    <li>
                                        <p><b>BSI</b> : 1059379220 a.n Dhea Tirta
                                        </p>
                                    </li>
                                    <li>
                                        <p><b>OVO</b> : 08980177393  a.n dhea tirta ananta
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama_pemilik_rekening" class="form-label">
                                    Nama Pemilik Rekening
                                </label>
                                <input required type="text" class="form-control" id="nama_pemilik_rekening"
                                    name="nama_pemilik_rekening" placeholder="Contoh : FAIZ RAHMADANI">
                            </div>
                            <div class="col-md-6">
                                <label for="bukti_pembayaran" class="form-label">
                                    Bukti Pembayaran
                                </label>
                                <input required type="file" class="form-control" id="bukti_pembayaran"
                                    name="bukti_pembayaran">
                                <div class="small">
                                    <label class="form-label mt-2 d-block">Format Penamaan :
                                        bukti_bayar_[nama]</label>
                                    <label class="form-label d-block">Format: .jpg, max. size 5 MB</label>
                                </div>
                            </div>
                        </div>
                        {{-- End of Pembayaran --}}
                        {{-- Checkbox accepting terms --}}
                        <div class="my-3 form-check">
                            <input class="form-check-input" type="checkbox" id="agreement" required>
                            <label class="form-check-label" for="agreement">
                                Saya menyatakan bahwa data/informasi/berkas yang saya sampaikan pada formulir ini adalah
                                benar
                            </label>
                        </div>
                        {{-- end of Checkbox accepting terms --}}
                        {{-- Submit Button --}}
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-4 epc-submit-button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
