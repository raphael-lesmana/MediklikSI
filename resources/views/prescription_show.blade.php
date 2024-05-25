<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Prescription {{$prescription->id}} ({{$prescription->status}})</h1>
    <ul>
        @foreach ($prescription->prescription_details as $prescription_detail)
            <li>{{$prescription_detail->medicine->name}} {{$prescription_detail->dose}} {{$prescription_detail->amount}}</li>
        @endforeach
    </ul>
</body>
</html>