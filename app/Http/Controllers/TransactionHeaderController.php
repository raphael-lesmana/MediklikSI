<?php

namespace App\Http\Controllers;

use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class TransactionHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = TransactionHeader::whereNull('receptionist_id')->get();
        return view('transaction', compact('transactions'));
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
    public function show(TransactionHeader $transaction)
    {
        return view('transaction_show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransactionHeader $transaction)
    {
        return view('transaction_edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionHeader $transaction)
    {
        $transaction->receptionist_id = Auth::id();
        $transaction->payment_type = $request->payment_type;
        $transaction->completed = $request->transactionr;
        $transaction->save();
        return redirect()->route('transaction.show', ['transaction' => $transaction]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
