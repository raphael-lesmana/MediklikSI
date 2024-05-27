<?php

namespace App\Http\Controllers;

use App\Models\PrescriptionHeader;
use Illuminate\Http\Request;

class PrescriptionHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prescriptions = PrescriptionHeader::all();
        return view('prescription', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PrescriptionHeader $prescription)
    {
        return view('prescription_show', compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrescriptionHeader $prescription)
    {
        return view('prescription_edit', compact('prescription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrescriptionHeader $prescription)
    {
        $prescription->status = $request->status;
        $prescription->save();
        return redirect()->route('prescription_header.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrescriptionHeader $prescriptionHeader)
    {
        //
    }
}
