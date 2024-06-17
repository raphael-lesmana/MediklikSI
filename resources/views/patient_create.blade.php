@extends('template.file')
@extends('template.background')

@section('title', 'Register Patient')

@section('content')
<div class="mt-3">
    <div class="d-flex justify-content-center mb-5">
        <h1>Register New Patient</h1>
    </div>

    <div style="margin-left: 5vw; margin-right: 5vw">
        <form action={{route('patient.index')}} method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name ="dob" id="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name ="phone" id="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" id="" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection