@extends('layout.layout')
@section('content')
    <img src="{{ asset('img/epc-card.png') }}" class="epc-card" alt="card">
    <div class="card-text">
        <div class="card-header-wrapper">
            <div class="card-header d-flex justify-content-between">
                <div class="card-logo-section">
                    <img src="{{ asset('img/epw-text.png') }}" alt="logo epw">
                </div>
                <div class="card-team-section text-center pt-3">
                    <h3>{{ $nama }}</h3>
                    <h4>{{ $reg }}</h4>
                </div>
                <div class="card-logo-epc">
                    <img src="{{ asset('img/epc-header.png') }}" alt="epc header" width="185">
                </div>
            </div>
        </div>
        <div class="white-divider"></div>
    </div>
@endsection
