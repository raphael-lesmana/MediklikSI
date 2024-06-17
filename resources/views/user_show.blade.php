@extends('template.file')
@extends('template.background')

@section('title', 'Profile')

@section('content')
    <div class="d-flex justify-content-center mt-3 mb-2">
        <h1>Profile</h1>
    </div>

    <div class="d-flex" style="margin-left: 20vw; margin-right: 20vw">
        <table class = "table-dark table-bordered table">
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Name</td>
                <td class = "table-dark table-bordered">{{$user->full_name}}</td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Role</td>
                <td class = "table-dark table-bordered">{{$user->name}}</td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Email</td>
                <td class = "table-dark table-bordered">{{$user->email}}</td>
            </tr>
        </table>
    </div>

@endsection