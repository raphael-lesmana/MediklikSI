<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Gate::allows('doctor') && empty($current_queue))
        <h1>Not currently processing any queue</h1>
    @endif
    <table>
        @if (Gate::allows('receptionist') || Gate::allows('admin'))
            @foreach ($queues as $queue)
            <tr>
                <td>{{$queue->patient()->first()->name}}</td>
                <td>{{$queue->staff()->first()->full_name}}</td>
            </tr>
            @endforeach
        @elseif (Gate::allows('doctor'))
            @foreach ($queues as $queue)
                @if ($queue->staff_id == Auth::id())
                    <tr>
                        <td>{{$queue->patient()->first()->name}}</td>
                        <td>{{$queue->staff()->first()->full_name}}</td>
                        <td>{{$queue->created_at}}</td>
                    </tr>
                @endif
            @endforeach
        @endif
        
    </table>
</body>
</html>