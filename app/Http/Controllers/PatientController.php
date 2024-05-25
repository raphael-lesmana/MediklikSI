<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patient', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patient_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $param = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
        ]);
        Patient::create($param);
        return redirect()->route('patient.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('patient_show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('patient_edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
        ]);
        $patient->name = $request->name;
        $patient->dob = $request->dob;
        $patient->gender = $request->gender;
        $patient->phone = $request->phone;
        $patient->save();
        return redirect()->route('patient.show', ['patient' => $patient]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
