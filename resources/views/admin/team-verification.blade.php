@extends('layout.admin')
@section('admin')
    <h1>Team Verification Page</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">Username</th>
                <th scope="col" class="text-center">Nama Tim</th>
                <th scope="col" class="text-center">Registration Number</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @php
                    $status = 'Not Verified';
                    if ($user->verified == 'true') {
                        $status = 'Verified';
                    }
                @endphp
                <tr>
                    <td class="text-center">{{ $user->username }}</td>
                    <td class="text-center">{{ $user->namatim }}</td>
                    <td class="text-center">{{ $user->nomer_reg }}</td>
                    <td class="text-center">{{ $status }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center">
                            <a href="/admin/verification/{{ $user->id }}/edit" class="btn btn-success">Verify</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
