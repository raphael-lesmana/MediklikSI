<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add patient to queue</h1>
    <form action={{route('queue.index')}} method="POST">
        @csrf
        <input type="text" name="patient_id" id="" placeholder="name">
        <select name="staff_id" id="">
            @foreach ($staff as $staff_member)
                <option value={{$staff_member->id}}>{{$staff_member->full_name}}</option>
            @endforeach
        </select>
        <button type="submit">Create</button>
    </form>
</body>
</html>