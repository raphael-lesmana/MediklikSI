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
        <li>Completed: {{$transaction->completed}}</li>
    </ul>
    <h2>Services</h2>
    @if (sizeof($services) > 0)
    <table>
        <tr>
            <th>Service description</th>
            <th>Service price</th>
        </tr>
        @foreach ($services as $service)
            <tr>
                <td>{{$service->service_description}}</td>
                <td>{{$service->service_price}}</td>
            </tr>
        @endforeach
    </table>
    @else
        None
    @endif
</body>
</html>