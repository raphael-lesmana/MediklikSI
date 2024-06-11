<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row" style="height: 100vh">
        <div class="col">
            foto
        </div>

        <div class="col d-flex" style="background-color: #285386; color: white;  align-items: center; justify-content: center">
            <div>
                <h1 class="mb-4">Login to see more..</h1>
                <form action={{route('login')}} method="post">
                    @csrf
                    <div class="row mb-3">
                        <input type="text" name="name" id="" placeholder = "Email">
                    </div>
                    <div class="row mb-3">
                        <input type="password" name="password" id="" placeholder = "Password">
                    </div>
                    <p class="d-flex" style="justify-content: right">Forgot your password?</p>
                    <div class="d-flex mb-3" style="justify-content: center">
                        <button type="submit">Login</button>
                    </div>
                    <div class="d-flex" style="justify-content: center">
                        <p>Don't have an account? Sign Up</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>