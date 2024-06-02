<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Transaction Info</h1>
    <ul>
        <li>Patient name: {{$transaction->patient->name}}</li>
        <li>Complete: {{$transaction->completed}}</li>
    </ul>
    <h2>Services</h2>
    <table>
        {{-- @foreach ($collection as $item)
            
        @endforeach --}}
    </table>
</body>
</html>