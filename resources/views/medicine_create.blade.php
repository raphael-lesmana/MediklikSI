<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Medicine create test
    <form action={{route('medicine.index')}} method="POST">
        @csrf
        <input type="text" name="name" id=""><label for="name">Name</label><br>
        <input type="number" name="stock" id=""><label for="stock">Stock</label><br>
        <input type="text" name="form" id=""><label for="form">Form</label><br>
        <input type="number" name="price" id=""><label for="price">Price</label><br>
        <button>Submit</button>
    </form>
</body>
</html>