<?php

namespace App\Http\Controllers;

use App\Models\Donors;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $donors = Donors::all();
        return view('donors')
         ->with('donors',$donors)
         ;
    }

    public function store(Request $request)
    { 
        $donors = new Donors;

        $donors->Name = $request->input('Name');
        $donors->Age = $request->input('Age');
        $donors->Address = $request->input('Address');
        $donors->Mobile = $request->input('Mobile');
        $donors->Email = $request->input('Email');
        $donors->BloodGroup = $request->input('BloodGroup');
        $donors->BloodPressure = $request->input('BloodPressure');
        $donors->Covidpositive = $request->input('Covidpositive');
        $donors->RecoveryDate = $request->input('RecoveryDate');
        $donors->Certified = $request->input('Certified');

        $donors->save();
        return redirect('/donors')->with('status','Data Added For Donation');

    }
public function edit($id)
 {
    $donors = Donors::findOrFail($id);
    return view('donors-edit')->with('donors', $donors);
 }
 public function update(Request $request, $id) 
 {
    $donors = Donors::findOrFail($id);
    $donors->Address = $request->input('Address');
    $donors->Mobile = $request->input('Mobile');
    $donors->Email = $request->input('Email');
    $donors->BloodPressure = $request->input('BloodPressure');
    $donors->Covidpositive = $request->input('Covidpositive');
    $donors->RecoveryDate = $request->input('RecoveryDate');
    $donors->Certified = $request->input('Certified');
    $donors->update();
    return redirect('donors')->with('status','Your Data is Updated');

 }

}
