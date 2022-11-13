@extends('layout.admin')
@section('admin')
    <h1>Uploaded Files</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">Foto Ketua</th>
                <th scope="col" class="text-center">Foto Anggota 1</th>
                <th scope="col" class="text-center">Kartu Pelajar Ketua</th>
                <th scope="col" class="text-center">Nama Anggota 1</th>
                <th scope="col" class="text-center">NISN Anggota 1</th>
                <th scope="col" class="text-center">Email Ketua</th>
                <th scope="col" class="text-center">No HP Ketua</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $item)
                <tr>
                    <td class="text-center">{{ $item->namatim }}</td>
                    <td class="text-center">{{ $item->nama_ketua }}</td>
                    <td class="text-center">{{ $item->nisn_ketua }}</td>
                    <td class="text-center">{{ $item->nama_anggota1 }}</td>
                    <td class="text-center">{{ $item->nisn_anggota1 }}</td>
                    <td class="text-center">{{ $item->email_ketua }}</td>
                    <td class="text-center">{{ $item->nohp_ketua }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
