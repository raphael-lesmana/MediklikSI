@extends('template.file')
@extends('template.background')

@section('title', 'Update Profile')

@section('content')

<div class="d-flex justify-content-center mt-3 mb-2">
    <h1>Update Profile</h1>
</div>

<div class="d-flex" style="padding-left: 15vw; padding-right: 15vw;">
    <form action="" method="post">
        @csrf

        <table class="table table-borderless">
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="email">New Email</label></td>
                <td class = "table-dark table-bordered">
                    <input type="email" name="email" id=""></td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="new_password">New Password</label></td>
                <td class = "table-dark table-bordered">
                    <input type="password" name="new_password" id=""></td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">
                    <label for="cur_password">Current Password</label></td>
                <td class = "table-dark table-bordered">
                    <input type="password" name="cur_password" id=""></td>
            </tr>
        </table>
        
        <div class="d-flex justify-content-center mt-3 mb-2">
            <button class="btn btn-secondary" type="submit">Update</button>   
        </div>
        
    </form>
</div>
    

@endsection