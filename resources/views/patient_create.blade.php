<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Patient create test
    <form action={{route('patient.index')}} method="POST">
        @csrf
        <input type="text" name="nams" id=""><label for="name">Name</label><br>
        <input type="date" name="dob" id=""><label for="dob">Date of Birth</label><br>
        <input type="text" name="phone" id=""><label for="phone">Phone Number</label><br>
        <select name="gender" id=""><label for="name">Gender</label><br>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <button>Submit</button>
    </form>
</body>
</html>