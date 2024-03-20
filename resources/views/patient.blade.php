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
        @foreach ($patients as $patient)
            <tr>
                <td>{{$patient->name}}</td>
                <td>{{$patient->dob}}</td>
                <td>{{$patient->gender}}</td>
                <td>{{$patient->phone}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>