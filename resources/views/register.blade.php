<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action={{route('register')}} method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="text" name="full_name" id="">
        <select name="patient_gender" id="">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <input type="date" name="dob" id="">
        <input type="date" name="start_date" id="">
    </form>
</body>
</html>