<?php

namespace App\Http\Controllers;

use App\Models\RegistrationFee;
use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.registration-fee', [
            'regfee' => RegistrationFee::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationFee  $registrationFee
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationFee $registrationFee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrationFee  $registrationFee
     * @return \Illuminate\Http\Response
     */
    public function edit(
        RegistrationFee $registrationFee,
    ) {
        return view('admin.edit-registration-fee', [
            'registration_fee' => $registrationFee,
    
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrationFee  $registrationFee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrationFee $registrationFee)
    {
        $rules = [
            'registration_fee' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        RegistrationFee::where('id', $registrationFee->id)->update(
            $validatedData
        );
        return redirect('/admin/registration-fee')->with(
            'success',
            'Registration Fee has been updated!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationFee  $registrationFee
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationFee $registrationFee)
    {
        //
    }
}
