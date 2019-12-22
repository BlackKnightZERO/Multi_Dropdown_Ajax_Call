<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;

class PatientController extends Controller
{
    //
    public function add(Request $request)
    {
    	$validatedData = $request->validate([
    		'name' => 'required',
    		'dob' => 'required',
    		'dieses' => 'required',
    		'cell' => 'required',
    		'division' => 'required',
    		'district' => 'required',
    		'thana' => 'required',	
    	]);
    	//return $validatedData;

    	$patient = new patient;
    	$patient->name = $request->name; 
    	$patient->dob = $request->dob;
    	$patient->dieses = $request->dieses;
    	$patient->cell = $request->cell;
    	$patient->location = $request->division .','. $request->district .','. $request->thana;
    	$check = $patient->save();

    	if($check)
    	{
    		session()->flash('notif','Success!');
    	}
    	else
    	{
    		session()->flash('notif','Failed!');
	    }
	    return back();
    }
}
