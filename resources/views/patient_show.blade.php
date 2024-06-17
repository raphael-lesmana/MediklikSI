@extends('template.file')
@extends('template.background')

@section("title", "Patient's Record")

@section('content')

<body>
    <tr>
        <td>{{$patient->name}}</td>
        <td>{{$patient->dob}}</td>
        <td>{{$patient->gender}}</td>
        <td>{{$patient->phone}}</td>
    </tr>
    @foreach ($patient->medical_report as $medical_report)
        <h2>Medical report from {{$medical_report->created_at}}</h2>
        <table>
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
    @endforeach
</body>

@endsection