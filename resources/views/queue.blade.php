<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        @foreach ($queues as $queue)
            <tr>
                <td>{{$queue->patient()->first()->name}}</td>
                <td>{{$queue->staff()->first()->full_name}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>