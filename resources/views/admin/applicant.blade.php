@extends('layout.admin')
@section('admin')
    <h1>Applicant</h1>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">Responsive Hover Table</h3>
            <div class="card-tools">
                <button class="btn btn-sm btn-success" onclick="tableToExcel()">Export Table</button>
            </div>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap" id="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Sekolah</th>
                        <th scope="col" class="text-center">Kota</th>
                        <th scope="col" class="text-center">Nama Tim</th>
                        <th scope="col" class="text-center">Nama Ketua</th>
                        <th scope="col" class="text-center">NISN Ketua</th>
                        <th scope="col" class="text-center">Nama Anggota 1</th>
                        <th scope="col" class="text-center">NISN Anggota 1</th>
                        <th scope="col" class="text-center">Email Ketua</th>
                        <th scope="col" class="text-center">No HP Ketua</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applicants as $item)
                        <tr>
                            <td class="text-center">{{ $item->asalsekolah }}</td>
                            <td class="text-center">{{ $item->kota }}</td>
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
        </div>

    </div>
@endsection
