<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Medicine</h1>
    @if (sizeof($medicines) > 0)
        <table>
            <tr>
                <th>Name</th>
                <th>Form</th>
                <th>Stock</th>
                <th>Price</th>
            </tr>
            @foreach ($medicines as $medicine)
                <tr>
                    <td>{{$medicine->name}}</td>
                    <td>{{$medicine->form}}</td>
                    <td>{{$medicine->stock}}</td>
                    <td>{{$medicine->price}}</td>
                </tr>
            @endforeach
        </table>
    @else
        
    @endif
</body>
</html>