<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('prescription_header.update', ['prescription' => $prescription])}}" method="POST">
        @method('PATCH')
        @csrf
        <select name="gender" id="" value="{{$prescription->status}}"><label for="name">Gender</label><br>
            <option value="Pending"
            @if ($prescription->status == "Pending")
                selected
            @endif
            >Pending</option>
            <option value="Processing"
            @if ($prescription->status == "Processing")
                selected
            @endif>Processing</option>
            <option value="Ready"
            @if ($prescription->status == "Ready")
                selected
            @endif>Ready</option>
        </select>
        <button>Submit</button>
    </form>
</body>
</html>