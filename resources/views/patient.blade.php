@extends('template.file')
@extends('template.background')

@section('title', 'Patient')

@section('content')
<div class="d-flex justify-content-center mt-3 mb-3">
    <h1>List of Patients</h1>
</div>
<div class="d-flex" style="padding-left: 15vw; padding-right: 15vw;">
    <table class = "table-dark table-bordered table">
        <tr class = "table-light table-bordered">
            <td class = "table-light table-bordered">Patient's Name</td>
            <td class = "table-light table-bordered">Patient's DOB</td>
            <td class = "table-light table-bordered">Patient's Gender</td>
            <td class = "table-light table-bordered">Patient's Contact</td>
        </tr>
        @foreach ($patients as $patient)
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">{{$patient->name}}</td>
                <td class = "table-dark table-bordered">{{$patient->dob}}</td>
                <td class = "table-dark table-bordered">{{$patient->gender}}</td>
                <td class = "table-dark table-bordered">{{$patient->phone}}</td>
            </tr>
        @endforeach
    </table>
</body>
@endsection