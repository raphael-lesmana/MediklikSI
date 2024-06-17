@extends('template.file')
@extends('template.background')

@section("title", "Patient's Record")

@section('content')

<div class="d-flex justify-content-center mt-3 mb-3">
    <h1>{{$patient->name}}'s Medical Record</h1>
</div>

<div style="margin-left: 2vw">
    <div class="d-flex" style="padding-left: 20vw; padding-right: 20vw">
        <table class = "table-dark table-bordered table">
            <tr>
                <td>Name</td>
                <td>{{$patient->name}}</td>
            </tr>
            <tr>
                <td>DOB</td>
                <td>{{$patient->dob}}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>{{$patient->gender}}</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{$patient->phone}}</td>
            </tr>
        </table>
    </div>

    @foreach ($patient->medical_report as $medical_report)
        <h2 style="margin-top: 2vh; margin-bottom: 2vh" >Medical report from {{$medical_report->created_at}}</h2>
        <div class="d-flex" style="padding-left: 10vw; padding-right: 10vw">
            <table class = "table-dark table-bordered table">
                <tr>
                    <td>Doctor name</td>
                    <td>{{$medical_report->doctor->name}}</td>
                </tr>
                <tr>
                    <td>Systolic blood pressure</td>
                    <td>{{$medical_report->systolic_blood_pressure}}</td>
                </tr>
                <tr>
                    <td>Diastolic blood pressure</td>
                    <td>{{$medical_report->diastolic_blood_pressure}}</td>
                </tr>
                <tr>
                    <td>Respiratory rate</td>
                    <td>{{$medical_report->respiratory_rate}}</td>
                </tr>
                <tr>
                    <td>Oxygen saturation level</td>
                    <td>{{$medical_report->oxygen_saturation_level}}</td>
                </tr>
                <tr>
                    <td>Body temperature</td>
                    <td>{{$medical_report->body_temperature}}</td>
                </tr>
                <tr>
                    <td>Height</td>
                    <td>{{$medical_report->height}}</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>{{$medical_report->weight}}</td>
                </tr>
                <tr>
                    <td>Symptoms</td>
                    <td>{{$medical_report->symptoms}}</td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td>{{$medical_report->diagnosis}}</td>
                </tr>
                <tr>
                    <td>Suggestion</td>
                    <td>{{$medical_report->Suggestion}}</td>
                </tr>
            </table>
        </div>
    @endforeach
</div>

@endsection