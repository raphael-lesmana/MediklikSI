<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Unprocessed Transactions</h1>
    @if (sizeof($transactions) > 0)
        <ul>
            @foreach ($transactions as $transaction)
                <li>{{$transaction->id}} {{$transaction->patient->name}}</li>
            @endforeach
        </ul>
    @else
        
    @endif
</body>
</html>