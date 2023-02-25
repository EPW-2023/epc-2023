@extends('layout.layout')
@section('content')
    <div class="bg-dashboard">
        <img src="{{ asset('img/bg-dashboard-batik.png') }}" class="dashboard-batik" alt="batik">
        @include('partials.navbar-dashboard')
        <div class="d-flex justify-content-center">
            <div class="card login-card">
                <h5 class="text-center mb-4">EPC Login</h3>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                @error('username')
                            is-invalid
                        @enderror>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                @error('password')
                            is-invalid
                        @enderror>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Login!</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
