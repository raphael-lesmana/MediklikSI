<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Patient edit test
    <form action="{{route('patient.update', ['patient' => $patient])}}" method="POST">
        @method('PATCH')
        @csrf
        <input type="text" name="name" id="" value="{{$patient->name}}"><label for="name">Name</label><br>
        <input type="date" name="dob" id="" value="{{$patient->dob}}"><label for="dob">Date of Birth</label><br>
        <input type="text" name="phone" id="" value="{{$patient->phone}}"><label for="phone">Phone Number</label><br>
        <select name="gender" id="" value="{{$patient->gender}}"><label for="name">Gender</label><br>
            <option value="Laki-laki"
            @if ($patient->gender =="Laki-laki")
                selected
            @endif
            >Laki-laki</option>
            <option value="Perempuan"
            @if ($patient->gender =="Perempuan")
                selected
            @endif>Perempuan</option>
        </select>
        <button>Submit</button>
    </form>
</body>
</html>