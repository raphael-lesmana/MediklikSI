<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue Information</title>
</head>
<body>
    <ul>
        <li>Queue ID: {{$queue->patient->name}}</li>
        <li>Waiting since: {{$queue->updated_at}}</li>
        <li>Patient name: {{$queue->patient->name}}</li>
        <li>Patient DOB: {{$queue->patient->dob}}</li>
    </ul>
</body>
</html>