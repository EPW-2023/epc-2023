<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationFeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/register');
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
Route::get('/register', [ApplicantController::class, 'index']);
Route::post('/register', [ApplicantController::class, 'store']);

//Admin
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
        Route::get('/team', [AdminController::class, 'teamIndex'])->name(
            'admin-team'
        );
        Route::resource('/registration-fee', RegistrationFeeController::class);
    });
});
Route::middleware(['auth', 'role:Dev,Admin,Guest'])->group(function () {});
Route::get('/admin-login', [AuthController::class, 'index'])->name('login');
Route::post('/admin-login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('admin-logout');
Route::get('/dashboard', function () {
    return view('epc.dashboard');
});
