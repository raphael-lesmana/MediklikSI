@extends('template.file')

@section('title', 'Log In')

@section('content')

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
                    <button type="submit" class="btn btn-secondary">Login</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection