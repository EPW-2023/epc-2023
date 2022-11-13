@extends('layout.admin')
@section('admin')
    <h1>Teams</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">Username</th>
                <th scope="col" class="text-center">Nama Tim</th>
                <th scope="col" class="text-center">Asal Sekolah</th>
                <th scope="col" class="text-center">Kota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $item)
                <tr>
                    <td class="text-center">{{ $item->username }}</td>
                    <td class="text-center">{{ $item->namatim }}</td>
                    <td class="text-center">{{ $item->asalsekolah }}</td>
                    <td class="text-center">{{ $item->kota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
