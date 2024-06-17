@extends('template.file')
@extends('template.background')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center mt-3 mb-2">
    <h1>Register</h1>
</div>

<div class="d-flex" style="padding-left: 15vw; padding-right: 15vw;">
    <form action={{route('register')}} method="post">
        @csrf

        <table class="table table-borderless">
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="name">Name</label></td>
                <td class = "table-dark table-bordered">
                    <input type="text" name="name" id=""></td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="full_name">Full Name</label></td>
                <td class = "table-dark table-bordered">
                    <input type="text" name="full_name" id=""></td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="password">Password</label></td>
                <td class = "table-dark table-bordered">
                    <input type="password" name="password" id=""></td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="role_id">Role</label></td>
                <td class = "table-dark table-bordered">
                    <select name="role_id" id="">
                        <option value="1">Resepsionis</option>
                        <option value="2">Dokter</option>
                        <option value="3">Apoteker</option>
                        <option value="0">Administrator</option>
                    </select></td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="gender">Gender</label></td>
                <td class = "table-dark table-bordered">
                    <select name="gender" id="">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select></td>
            </tr>
            
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="dob">Date of Birth</label></td>
                <td class = "table-dark table-bordered">
                    <input type="date" name="dob" id=""></td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="start_date">Date of Register</label></td>
                <td class = "table-dark table-bordered">
                    <input type="date" name="start_date" id=""></td>
            </tr>
        </table>

        <button class="btn btn-secondary" type="submit">Register</button>
    </form>
</div>
@endsection