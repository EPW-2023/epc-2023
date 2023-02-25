@extends('layout.layout')
@section('content')
    <div class="bg-dashboard">
        {{-- <img src="{{ asset('img/bg-dashboard-batik.png') }}" class="dashboard-batik" alt="batik"> --}}
        @include('partials.navbar-dashboard')
        <div class="body-dashboard">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/epc-header.png') }}" width="400" alt="epc header">
            </div>
            <div class="text-center mt-5">
                <div class="fs-2">Pendaftaran EPC 2023 telah ditutup!</div>
                <div class="fs-3">Terima kasih atas partisipasinya!</div>
            </div>
        </div>
    </div>
