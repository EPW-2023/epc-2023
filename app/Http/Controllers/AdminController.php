<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\RegistrationFee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function teamIndex()
    {
        return view('admin.team', [
            'teams' => Applicant::all(),
        ]);
    }

    public function userIndex()
    {
        return view('admin.user');
    }
    public function applicantIndex()
    {
        return view('admin.applicant', [
            'applicants' => Applicant::all(),
        ]);
    }

    public function regFeeIndex()
    {
        return view('admin.registration-fee', [
            'regfee' => RegistrationFee::all(),
        ]);
    }
    //show form for editing
    public function regFeeEdit(RegistrationFee $registrationFee)
    {
        return view('admin.edit-registration-fee', [
            'registration_fee' => $registrationFee,
        ]);
    }

    //Create New Admin Methods
    public function newAdminCreate()
    {
        return view('admin.create-admin');
    }
    public function newAdminStore(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'Admin';
        User::create($validatedData);
        return redirect(route('admin-index'));
    }
}
