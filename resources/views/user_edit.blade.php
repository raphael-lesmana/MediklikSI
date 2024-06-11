<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update profile</h1>
    <form action="" method="post">
        @csrf
        <label for="email">New email: </label><input type="email" name="email" id=""><br>
        <label for="new_password">New password: </label><input type="password" name="new_password" id=""><br>
        <label for="cur_password">Current password: </label><input type="password" name="cur_password" id=""><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>