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
        <input type="password" name="password" id="">
        <select name="role_id" id="">
            <option value="1">Resepsionis</option>
            <option value="2">Dokter</option>
            <option value="3">Apoteker</option>
            <option value="0">Administrator</option>
        </select>
        <select name="gender" id="">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <input type="date" name="dob" id="">
        <input type="date" name="start_date" id="">
        <button type="submit">Register</button>
    </form>
</body>
</html>