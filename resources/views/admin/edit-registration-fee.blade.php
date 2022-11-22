@extends('layout.admin')
@section('admin')
    <div class="container">
        <h1> {{ $registration_fee->registration_fee }}</h1>
        <form action="/admin/registration-fee/{{ $registration_fee->id }}" method="POST">
            @method('put')
            @csrf
            <label for="registration_fee" class="form-label">Registration Fee</label>
            <input type="text" class="form-control mb-3" id="registration_fee" name="registration_fee"
                value="{{ $registration_fee->registration_fee }}">
            <button class="btn btn-danger">Change Price!</button>
        </form>
    </div>
@endsection
