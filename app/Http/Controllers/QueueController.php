<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Models\Role;
use App\Models\User;
use App\Models\UserQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $queues = Queue::all();
        $current_queue = UserQueue::where('user_id', Auth::id())->first();
        return view('queue', compact('queues', 'current_queue'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role_id = Role::where('name', 'doctor')->first()->id;
        $staff = User::where('role_id', $role_id)->get();
        return view('queue_create', compact('staff'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $param = $request->validate([
            'patient_id' => 'required',
            'staff_id' => 'required',
        ]);
        Queue::create($param);
        return redirect()->route('queue.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Queue $queue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Queue $queue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Queue $queue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Queue $queue)
    {
        //
    }
}
