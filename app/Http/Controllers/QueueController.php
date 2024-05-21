<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Models\Role;
use App\Models\TransactionHeader;
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
        $current_queue = UserQueue::where('user_id', Auth::id())->orderBy('updated_at')->first();
        return view('queue', compact('queues', 'current_queue'));
    }

    public function actions(Request $request)
    {
        $action = $request->action;
        if ($action == 'next')
        {
            $current_queue = Queue::orderBy('updated_at')->first();
            UserQueue::create([
                'queue_id' => $current_queue->id,
                'user_id' => Auth::id(),
            ]);
            return redirect()->back();
        }
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
        if (!empty($request->action))
            return $this->actions($request);

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
    public function show_wrapper(Queue $queue, $current = false)
    {
        return view('queue_show', compact('queue', 'current'));
    }

    public function show(Queue $queue)
    {
        $current_queue = Auth::user()->userqueue->queue;
        return $this->show_wrapper($queue, $current_queue->id == $queue->id);
    }

    public function current()
    {
        $current_queue = Auth::user()->userqueue->queue;
        return $this->show_wrapper($current_queue, true);
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
