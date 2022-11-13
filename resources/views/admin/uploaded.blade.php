@extends('layout.admin')
@section('admin')
    <h1>Uploaded Files</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nama Tim</th>
                <th scope="col" class="text-center">Foto Ketua</th>
                <th scope="col" class="text-center">Foto Anggota 1</th>
                <th scope="col" class="text-center">Kartu Pelajar Ketua</th>
                <th scope="col" class="text-center">Kartu Pelajar Anggota 1</th>
                <th scope="col" class="text-center">Bukti Pembayaran</th>
                <th scope="col" class="text-center">Pemilik Rekening</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $item)
                <tr>
                    <td class="text-centere">{{ $item->namatim }}</td>
                    <td><a href="/admin/download-foto-ketua/{{ $item->id }}" class="btn btn-danger">Download</a></td>
                    <td><a href="/admin/download-foto-anggota1/{{ $item->id }}" class="btn btn-danger">Download</a></td>
                    <td><a href="/admin/download-kartu-pelajar-ketua/{{ $item->id }}"
                            class="btn btn-danger">Download</a></td>
                    <td><a href="/admin/download-kartu-pelajar-anggota1/{{ $item->id }}"
                            class="btn btn-danger">Download</a></td>
                    <td><a href="/admin/download-bukti-pembayaran/{{ $item->id }}" class="btn btn-danger">Download</a>
                    </td>
                    <td>
                        {{ $item->nama_pemilik_rekening }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
