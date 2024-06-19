@extends('template.file')
@extends('template.background')

@section('title', 'Queue')

@section('content')
<div style="margin-top: 10vh; margin-left: 2vw">
    
    @if (Gate::allows('doctor') && !isset($current_queue))
        <div class="d-flex mb-3" style="justify-content: center">
            <h1>Not currently processing any queue</h1>
        </div>
    @elseif (Gate::allows('doctor') && isset($current_queue))
        <div class="d-flex mb-3" style="justify-content: center">
            <h1>Currently serving</h1>
        </div>

        <div style="margin-left: 25vw">
            <ul>
                <li><a style="color: white" href="{{route('queue.current')}}">{{$current_queue->queue->patient->name}}</a></li>
            </ul>
        </div>
    @elseif (Gate::allows('receptionist'))
        <a href="/queue/create" style="color: white">Create new queue</a>
    @endif
    

    @if(isset($queues))
    <div class="d-flex" style="padding-left: 15vw; padding-right: 15vw;">
        <table class = "table-dark table-bordered table">
            @if (Gate::allows('receptionist') || Gate::allows('admin'))
                <tr class = "table-light table-bordered">
                    <td class = "table-light table-bordered">Patient's Name</td>
                    <td class = "table-light table-bordered">Doctor's Name</td>
                </tr>
                @foreach ($queues as $queue)
                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">{{$queue->patient()->first()->name}}</td>
                    <td class = "table-dark table-bordered">{{$queue->staff()->first()->full_name}}</td>
                </tr>
                @endforeach
            @elseif (Gate::allows('doctor'))
                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Patient's Name</td>
                    <td class = "table-dark table-bordered">Doctor's Name</td>
                    <td class = "table-dark table-bordered">Queue Time</td>
                </tr>
                @foreach ($queues as $queue)
                    @if ($queue->staff_id == Auth::id())
                        <tr class = "table-dark table-bordered">
                            <td class = "table-dark table-bordered">{{$queue->patient()->first()->name}}</td>
                            <td class = "table-dark table-bordered">{{$queue->staff()->first()->full_name}}</td>
                            <td class = "table-dark table-bordered">{{$queue->created_at}}</td>
                        </tr>
                    @endif
                @endforeach
            @endif
        </table>
    </div>
    @endif

    @if (Gate::allows('doctor') && empty($current_queue))
        <form action={{route('queue.index')}} method="post">
            @csrf
            <input type="hidden" name="action" value="next">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary">Next queue</button>
            </div>
        </form>
    @endif
</div>
@endsection