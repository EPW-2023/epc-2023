@extends('layout.layout')
@section('content')
    <div class="bg-epc-registered">
        @include('partials.navbar-dashboard')
        <div class="d-flex justify-content-center">
            <img src="{{ asset('img/epc-header.png') }}" width="400" alt="epc header">
        </div>
        <div class="text-center fs-3 mt-5">
            <div>Mohon maaf, data registrasi anda belum terverifikasi</div>
            <div>Silahkan Hubungi CP EPC 2023 untuk info lebih lanjut</div>
        </div>
    </div>
@endsection
