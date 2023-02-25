<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\RegistrationFeeController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;
use Mockery\VerificationDirector;


Route::get('/', function () {
    return redirect('/registration-closed');
});

Route::get('/register', function () {
    return redirect('/registration-closed');
});

Route::get('/registration-closed', function () {
    return view('epc.pendaftaran-ditutup', [
        'title' => 'Registration Closed!'
    ]);
});

Route::get('/help', function () {
    return view('help');
});
Route::get('/coming-soon', function () {
    return view('errors.comingsoon');
})->name('coming-soon');

//success
Route::get('/success', function () {
    return view('success');
});

//Registration to Applicants
// Route::get('/register', [ApplicantController::class, 'index']);
// Route::post('/register', [ApplicantController::class, 'store']);

//Login to Applicants
Route::get('/login', [ApplicantController::class, 'indexLogin'])->name(
    'applicant-login'
);
Route::post('/login', [ApplicantController::class, 'applicantAuth']);
Route::post('/applicant-logout', [ApplicantController::class, 'logout'])->name('applicant-logout');

//Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('epc.dashboard', [
            'title' => 'EPC Dashboard',
        ]);
    });

    //Download Kartu Peserta Routes
    Route::get('/download-kartu-peserta', [DownloadController::class, 'downloadKartuPeserta'])->name('download-kartu');
});

//Dev only
Route::middleware(['auth', 'role:Dev'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/create-new-admin', [
            AdminController::class,
            'newAdminCreate',
        ])->name('admin-create-new-admin');
        Route::post('/create-new-admin', [
            AdminController::class,
            'newAdminStore',
        ])->name('newadmin-store');
    });
});
//Dev and Admin
Route::middleware(['auth', 'role:Dev,Admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin-index');
        Route::get('/user', [AdminController::class, 'userIndex'])->name(
            'admin-user'
        );
        Route::get('/applicant', [
            AdminController::class,
            'applicantIndex',
        ])->name('admin-applicant');
        //Editing Registration Fee Feature
        Route::resource('/registration-fee', RegistrationFeeController::class);

        # Verification Feature
        Route::get('verification', [
            VerificationController::class,
            'index',
        ])->name('admin-verification');
        Route::get('verification/{user:id}/edit', [
            VerificationController::class,
            'edit',
        ]);
        Route::put('verification/{user:id}', [
            VerificationController::class,
            'update',
        ]);

        //UPLOADED FILES
        Route::get('/uploaded-files', [
            DownloadController::class,
            'index',
        ])->name('uploaded-file');
        //ROUTE UPLOADED FILES
        Route::get('/download-foto-ketua/{applicant:id}', [
            DownloadController::class,
            'downloadFotoKetua',
        ]);
        Route::get('/download-foto-anggota1/{applicant:id}', [
            DownloadController::class,
            'downloadFotoAnggota1',
        ]);
        Route::get('/download-kartu-pelajar-ketua/{applicant:id}', [
            DownloadController::class,
            'downloadKartuPelajarKetua',
        ]);
        Route::get('/download-kartu-pelajar-anggota1/{applicant:id}', [
            DownloadController::class,
            'downloadKartuPelajarAnggota1',
        ]);
        Route::get('/download-bukti-pembayaran/{applicant:id}', [
            DownloadController::class,
            'downloadBuktiPembayaran',
        ]);
    });
});
Route::get('/admin-login', [AuthController::class, 'index'])->name('login');
Route::post('/admin-login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('admin-logout');

// Route::get('/registration-card', function () {
//     return view('epc.card', [
//         'title' => 'Registration Card',
//         'nama' => 'Faiz Rahmadani',
//         'reg' => '5009201112',
//     ]);
// });
Route::fallback(function () {
    $title = ['title' => 'Oops, Page Not Found'];
    return view('errors.404', $title);
});
