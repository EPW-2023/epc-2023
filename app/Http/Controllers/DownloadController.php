<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        return view('admin.uploaded', [
            'applicants' => Applicant::all(),
        ]);
    }
    public function downloadFotoKetua(Applicant $applicant)
    {
        $path = public_path(
            'storage/' . $applicant->namatim . '/' . $applicant->foto_ketua
        );
        return response()->download($path);
    }
    public function downloadFotoAnggota1(Applicant $applicant)
    {
        $path = public_path(
            'storage/' . $applicant->namatim . '/' . $applicant->foto_anggota1
        );
        return response()->download($path);
        // dd($path);
    }
    public function downloadKartuPelajarKetua(Applicant $applicant)
    {
        $path = public_path(
            'storage/' .
                $applicant->namatim .
                '/' .
                $applicant->kartu_pelajar_ketua
        );
        return response()->download($path);
        // dd($path);
    }
    public function downloadKartuPelajarAnggota1(Applicant $applicant)
    {
        $path = public_path(
            'storage/' .
                $applicant->namatim .
                '/' .
                $applicant->kartu_pelajar_anggota1
        );
        return response()->download($path);
        // dd($path);
    }
    public function downloadBuktiPembayaran(Applicant $applicant)
    {
        $path = public_path(
            'storage/' .
                $applicant->namatim .
                '/' .
                $applicant->bukti_pembayaran
        );
        return response()->download($path);
        // dd($path);
    }
}
