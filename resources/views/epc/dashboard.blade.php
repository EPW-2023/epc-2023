@php
    $guidebook = 'https://drive.google.com/drive/folders/1JcFBOlFvWUSL7-mNI7Gk9y_h1jOE0a_e';
    $kisikisi = 'https://drive.google.com/file/d/1oJg07iaFFS5mn0c4hLv4G1nlmXNJ1zdN/view';
    $banksoal = 'https://drive.google.com/drive/folders/14ofuArl0oIc7f7tWBZZGKJIi3_StyFNU';
@endphp
@extends('layout.layout')
@section('content')
    <div class="bg-dashboard">
        {{-- <img src="{{ asset('img/bg-dashboard-batik.png') }}" class="dashboard-batik" alt="batik"> --}}
        @include('partials.navbar-dashboard')
        @if (auth()->user()->verified == 'true')
            <div class="d-flex justify-content-center">
                <div class="body-dashboard">
                    <div class="d-flex">
                        <div class="d-flex align-items-center gap-4">
                            <img src="{{ asset('img/avatar.svg') }}" alt="avatar" width="150">
                            <div>
                                <h3>Hello, {{ auth()->user()->namatim }}</h3>
                                <a href="#" class="registration-number">{{ auth()->user()->nomer_reg }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-selection">
                        <div class="row mt-5 mx-auto" style="gap: 100px">
                            <div class="col-xl-5">
                                <a href="{{ $guidebook }}" target="_blank" class="text-decoration-none">
                                    <div class="selection-option guidebook d-flex align-items-center px-5">
                                        <div>
                                            <img src="{{ asset('img/book.svg') }}" alt="book icon" width="60">
                                        </div>
                                        <div>
                                            <h3>Guidebook</h3>
                                            <div class="small">EPC 2023 Guidebook</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-5">
                                <a href="{{ route('download-kartu') }}" class="text-decoration-none">
                                    <div class="selection-option team-card d-flex align-items-center px-5">
                                        <div>
                                            <img src="{{ asset('img/card.svg') }}" alt="book icon" width="60">
                                        </div>
                                        <div>
                                            <h3>Team Card</h3>
                                            <div class="small">Download your team card</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-5 mx-auto" style="gap: 100px">
                            <div class="col-xl-5">
                                <a href="{{ $kisikisi }}" target="_blank" class="text-decoration-none">
                                    <div class="selection-option kisi-kisi d-flex align-items-center px-5">
                                        <div>
                                            <img src="{{ asset('img/paper.svg') }}" alt="book icon" width="50">
                                        </div>
                                        <div>
                                            <h3>Kisi-kisi</h3>
                                            <div class="small">Kisi-kisi soal EPC 2023</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-5">
                                <a href="{{ $banksoal }}" target="_blank" class="text-decoration-none">
                                    <div class="selection-option bank-soal d-flex align-items-center px-5">
                                        <div>
                                            <img src="{{ asset('img/file.svg') }}" alt="book icon" width="50">
                                        </div>
                                        <div>
                                            <h3>Bank Soal</h3>
                                            <div class="small">Kumpulan Soal EPC 2023</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (auth()->user()->verified == 'false')
            <div class="body-dashboard">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/epc-header.png') }}" width="400" alt="epc header">
                </div>
                <div class="text-center mt-5">
                    <div class="fs-2">Mohon maaf, data registrasi anda belum terverifikasi</div>
                    <div class="fs-3">Silahkan Hubungi CP EPC 2023 untuk info lebih lanjut</div>
                </div>
            </div>
        @endif
    </div>
@endsection
