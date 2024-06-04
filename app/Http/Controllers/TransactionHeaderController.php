<?php

namespace App\Http\Controllers;

use App\Models\ServiceTransaction;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $services = $transaction->service_transaction;
        return view('transaction_show', compact('transaction', 'services'));
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
        $transaction->completed = $request->completed == 'ON';
        $transaction->save();
        $n = $request->service_count;
        for ($i = 0; $i < $n; $i++)
        {
            ServiceTransaction::create([
                'transaction_header_id' => $transaction->id,
                'service_description' => $request['service_' . $i],
                'service_price' => $request['price_' . $i],
            ]);
        }

        return redirect()->route('transaction_header.show', ['transaction' => $transaction]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
