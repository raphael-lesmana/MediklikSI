@extends('template.file')
@extends('template.background')

@section('title', 'Queue')

@section('content')
<div>
    
    <div class="d-flex" style="justify-content: center">
    @if (Gate::allows('doctor') && empty($current_queue))
        <h1>Not currently processing any queue</h1>
    @elseif (Gate::allows('doctor') && !empty($current_queue))
        <h1>Currently serving</h1>
        <ul>
            <li><a href="{{route('queue.current')}}">{{$current_queue->queue->patient->name}}</a></li>
        </ul>
    @elseif (Gate::allows('receptionist'))
        <a href="/queue/create" style="color: white">Create new queue</a>
    @endif
    </div>

    <div class="d-flex">
        <table class = "table-dark table-bordered table">
            @if (Gate::allows('receptionist') || Gate::allows('admin'))
                @foreach ($queues as $queue)
                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">{{$queue->patient()->first()->name}}</td>
                    <td class = "table-dark table-bordered">{{$queue->staff()->first()->full_name}}</td>
                </tr>
                @endforeach
            @elseif (Gate::allows('doctor'))
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

    @if (Gate::allows('doctor') && empty($current_queue))
        <form action={{route('queue.index')}} method="post">
            @csrf
            <input type="hidden" name="action" value="next">
            <button type="submit">Next queue</button>
        </form>
    @endif
    

</div>
