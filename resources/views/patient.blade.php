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
                <td>{{$patient->patient_name}}</td>
                <td>{{$patient->patient_dob}}</td>
                <td>{{$patient->patient_gender}}</td>
                <td>{{$patient->patient_phone}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>