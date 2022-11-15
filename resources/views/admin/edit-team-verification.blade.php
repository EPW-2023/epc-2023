@extends('layout.admin')
@section('admin')
    <div class="container">
        <form action="/admin/verification/{{ $verify->id }}" method="POST">
            @method('put')
            @csrf
            <label for="nomer_reg" class="form-label">Registration Fee</label>
            <input type="text" class="form-control mb-3" id="nomer_reg" name="nomer_reg"
                value="{{ $verify->nomer_reg }}">
            <button class="btn btn-success">Verify!</button>
        </form>
    </div>
@endsection
