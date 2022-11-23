@extends('layout.layout')
@section('content')
    <div class="bg-login">
        <div class="d-flex justify-content-center">
            <div class="card login-card">
                <h5 class="text-center mb-4">EPC ADMIN LOGIN</h3>
                    <form action="/admin-login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button class="btn btn-primary">Login!</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
