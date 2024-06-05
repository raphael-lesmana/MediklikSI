<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My profile</title>
</head>
<body>
    <h1>{{$user->real_name}}</h1>
    <ul>
        <li>Username: {{$user->name}}</li>
        <li>Email: {{$user->email}}</li>
    </ul>
</body>
</html>