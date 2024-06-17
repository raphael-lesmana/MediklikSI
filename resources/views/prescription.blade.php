@extends('template.file')
@extends('template.background')

@section('title', 'Prescription Status')

@section('content')
<div class="d-flex justify-content-center mt-3 mb-2">
    <h1>Prescription Information</h1>
</div>

@if (sizeof($prescriptions) > 0)
    <div class="d-flex" style="padding-left: 15vw; padding-right: 15vw;">
        <table class = "table-dark table-bordered table">
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Prescription ID</td>
                <td class = "table-dark table-bordered">Status</td>
            </tr>
            @foreach ($prescriptions as $prescription)
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">{{$prescription->id}}</td>
                <td class = "table-dark table-bordered">{{$prescription->status}}</td>
                <td>
                    <a href={{route('prescription_header.show', ['prescription' => $prescription])}}></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@else
    <div class="d-flex justify-content-center mt-3 mb-2">
        <h2>There is no data available</h2>
    </div>
@endif

@endsection