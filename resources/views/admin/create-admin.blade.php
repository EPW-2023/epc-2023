@extends('layout.admin')
@section('admin')
    <h1>Create New Admin</h1>
    <form action="{{ route('newadmin-store') }}" method="post">
        @csrf
        <div class="container mt-5" style="width: 60%">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Create!</button>
        </div>
    </form>
@endsection
