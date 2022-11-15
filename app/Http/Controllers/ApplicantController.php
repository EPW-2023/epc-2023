<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\RegistrationFee;
use App\Models\User;
use App\Models\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApplicantController extends Controller
{
    public function index()
    {
        //display the registration page
        return view('epc.registration', [
            'title' => 'EPC Registration',
            'registration_fee' => RegistrationFee::all(),
        ]);
    }

    public function store(Request $request)
    {
        $applicantsData = $request->validate([
            'namatim' => ['required'],
            'username' => ['required', 'unique:applicants', 'unique:users'],
            'password' => ['required'],
            'asalsekolah' => ['required'],
            'kota' => ['required'],
            'nama_ketua' => ['required'],
            'nisn_ketua' => ['required'],
            'nohp_ketua' => ['required'],
            'email_ketua' => ['required'],
            'nama_anggota1' => ['required'],
            'nisn_anggota1' => ['required'],
            'foto_ketua' => ['required', 'mimes:jpg,jpeg,png'], //file
            'foto_anggota1' => ['required', 'mimes:jpg,jpeg,png'], //file
            'kartu_pelajar_ketua' => ['required', 'mimes:jpg,jpeg,png'], //file
            'kartu_pelajar_anggota1' => ['required', 'mimes:jpg,jpeg,png'], //file
            'nama_pemilik_rekening' => ['required'],
            'bukti_pembayaran' => ['required', 'mimes:jpg,jpeg,png'], //file
        ]);
        $applicantsData['password'] = Hash::make($applicantsData['password']);

        //per file an duniawi

        //foto ketua
        $foto_ketua = $request->file('foto_ketua');
        $nama_foto_ketua =
            $applicantsData['namatim'] .
            ' ' .
            'foto ketua' .
            '.' .
            $foto_ketua->getClientOriginalExtension();
        $tujuan_foto_ketua = 'storage/' . $applicantsData['namatim'];
        $foto_ketua->move($tujuan_foto_ketua, $nama_foto_ketua);

        //foto anggota 1
        $foto_anggota1 = $request->file('foto_anggota1');
        $nama_foto_anggota1 =
            $applicantsData['namatim'] .
            ' ' .
            'foto anggota1' .
            '.' .
            $foto_anggota1->getClientOriginalExtension();
        $tujuan_foto_anggota1 = 'storage/' . $applicantsData['namatim'];
        $foto_anggota1->move($tujuan_foto_anggota1, $nama_foto_anggota1);

        //kartu pelajar ketua
        $kartu_pelajar_ketua = $request->file('kartu_pelajar_ketua');
        $nama_kartu_pelajar_ketua =
            $applicantsData['namatim'] .
            ' ' .
            'kartu pelajar ketua' .
            '.' .
            $kartu_pelajar_ketua->getClientOriginalExtension();
        $tujuan_kartu_pelajar_ketua = 'storage/' . $applicantsData['namatim'];
        $kartu_pelajar_ketua->move(
            $tujuan_kartu_pelajar_ketua,
            $nama_kartu_pelajar_ketua
        );

        //kartu pelajar anggota 1
        $kartu_pelajar_anggota1 = $request->file('kartu_pelajar_anggota1');
        $nama_kartu_pelajar_anggota1 =
            $applicantsData['namatim'] .
            ' ' .
            'kartu pelajar anggota1' .
            '.' .
            $kartu_pelajar_anggota1->getClientOriginalExtension();
        $tujuan_kartu_pelajar_anggota1 =
            'storage/' . $applicantsData['namatim'];
        $kartu_pelajar_anggota1->move(
            $tujuan_kartu_pelajar_anggota1,
            $nama_kartu_pelajar_anggota1
        );

        $bukti_pembayaran = $request->file('bukti_pembayaran');
        $nama_bukti_pembayaran =
            $applicantsData['namatim'] .
            ' ' .
            'bukti pembayaran' .
            '.' .
            $bukti_pembayaran->getClientOriginalExtension();
        $tujuan_bukti_pembayaran = 'storage/' . $applicantsData['namatim'];
        $bukti_pembayaran->move(
            $tujuan_bukti_pembayaran,
            $nama_bukti_pembayaran
        );

        $applicantsData['foto_ketua'] = $nama_foto_ketua;
        $applicantsData['foto_anggota1'] = $nama_foto_anggota1;
        $applicantsData['kartu_pelajar_ketua'] = $nama_kartu_pelajar_ketua;
        $applicantsData[
            'kartu_pelajar_anggota1'
        ] = $nama_kartu_pelajar_anggota1;
        $applicantsData['bukti_pembayaran'] = $nama_bukti_pembayaran;
        $applicantsData['nama_pemilik_rekening'] =
            $request->nama_pemilik_rekening;

        Applicant::create($applicantsData);
        User::create([
            'namatim' => $applicantsData['namatim'],
            'username' => $applicantsData['username'],
            'password' => $applicantsData['password'],
        ]);

        return redirect('/login');
    }

    public function indexLogin()
    {
        return view('epc.login', [
            'title' => 'EPC Login',
        ]);
    }
    public function applicantAuth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return redirect('/login')->with('LoginError', 'Login Failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        request()
            ->session()
            ->invalidate();
        request()
            ->session()
            ->regenerateToken();

        return redirect(route('applicant-login'));
    }
}
