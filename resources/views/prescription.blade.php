<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (sizeof($prescriptions) > 0)
        <table>
            <tr>
                <td>Prescription ID</td>
                <td>Status</td>
            </tr>
            @foreach ($prescriptions as $prescription)
            <tr>
                <td>
                    {{$prescription->id}}
                </td>
                <td>
                    {{$prescription->status}}
                </td>
                <td>
                    <a href={{route('prescription.show', ['id' => $prescription->id])}}></a>
                </td>
            </tr>
            @endforeach
        </table>
    @else
        empty
    @endif
</body>
</html>