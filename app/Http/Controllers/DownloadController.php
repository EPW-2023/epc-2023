<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ZipArchive;
use Illuminate\Support\Facades\File;

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

    public function downloadKartuPeserta()
    {
        $user = Auth::user();
        $teamUsername = $user->username;
        // Find all PDF files with the same team name
        $pdfFiles = File::glob(public_path('storage/kartu-peserta/' . $teamUsername . '_*.pdf'));
        // Create a new zip file
        $zip = new ZipArchive();
        $fileName = $teamUsername . '_kartuPeserta.zip';

        if ($zip->open($fileName, ZipArchive::CREATE) === TRUE) {
            // Add all PDF files to the zip file
            foreach ($pdfFiles as $file) {
                $zip->addFile($file, basename($file));
            }

            $zip->close();
        }

        // Download the zip file
        return response()->download($fileName)->deleteFileAfterSend(true);
    }
}
