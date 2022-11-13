@extends('layout.layout')
@section('content')
    <div class="bg-epc-registered">
        @include('partials.navbar-dashboard')
        <div class="d-flex justify-content-center">
            <img src="{{ asset('img/epc-header.png') }}" width="400" alt="epc header">
        </div>
        <div class="text-center fs-3 mt-5">Data anda telah disimpan dan sedang dalam tahap verifikasi <br>
            Terima kasih telah mendaftar EPC EPW 2023</div>
        <div class="text-center">
            <a href="/dashboard" class="btn btn-primary mt-4">Go to Dashboard</a>
        </div>
    </div>
@endsection
