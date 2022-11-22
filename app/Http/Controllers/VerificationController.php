<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RegistrationFee;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function index()
    {
        return view('admin.team-verification', [
            'title' => 'Team Verification',
            'users' => User::all(),
        ]);
    }
    public function edit(User $user)
    {
        return view('admin.edit-team-verification', [
            'verification' => $user,
        ]);
    }
    public function update(Request $request, User $user)
    {
        $rules = [
            'nomer_reg' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        $validatedData['verified'] = 'true';
        // dd($validatedData);
        User::where('id', $user->id)->update($validatedData);
        return redirect('/admin/verification')->with(
            'success',
            'Registration Fee has been updated!'
        );
    }
}
