<?php

namespace App\Http\Controllers;

use App\Models\MedicalReport;
use App\Models\Medicine;
use App\Models\PrescriptionDetails;
use App\Models\PrescriptionHeader;
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
        if ($current)
        {
            $medicines = Medicine::all();
            return view('queue_show', compact('queue', 'current', 'medicines'));
        }
        else
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

    public function finish_current(Request $request)
    {
        $current_queue = Auth::user()->userqueue->queue;
        MedicalReport::create([
            'patient_id' => $current_queue->patient->id,
            'staff_id' => Auth::id(),
            'systolic_blood_pressure' => $request->systolic_blood_pressure,
            'diastolic_blood_pressure' => $request->diastolic_blood_pressure,
            'respiratory_rate' => $request->respiratory_rate,
            'oxygen_saturation_level' => $request->oxygen_saturation_level,
            'body_temperature' => $request->body_temperature,
            'height' => $request->height,
            'weight' => $request->weight,
            'symptoms' => $request->symptoms,
            'diagnosis' => $request->diagnosis,
            'suggestion' => $request->suggestion,
        ]);

        if ($request->enable_prescription)
        {
            $n = $request->prescription_count;
            $prescription_header = PrescriptionHeader::create([

            ]);
            for ($i = 0; $i < $n; $i++)
            {
                PrescriptionDetails::create([
                    'prescription_header_id' => $prescription_header->id,
                    'medicine_id' => $request['medicine_' . $i],
                    'dose' => $request['dose_' . $i],
                    'amount' => $request['amount_' . $i],
                ]);
            }
        }

        $transaction = TransactionHeader::create();
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
