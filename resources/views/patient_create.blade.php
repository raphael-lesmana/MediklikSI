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
        <input type="text" name="patient_name" id="">
        <input type="date" name="patient_dob" id="">
        <input type="text" name="patient_phone" id="">
        <select name="patient_gender" id="">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Laki-laki">Perempuan</option>
        </select>
        <button>Submit</button>
    </form>
</body>
</html>