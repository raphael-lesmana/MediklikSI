@extends('template.file')
@extends('template.background')

@section('title', 'Prescription Detail')

@section('content')

<div class="d-flex justify-content-center mt-3 mb-2">
    <h1>Prescription {{$prescription->id}} ({{$prescription->status}})</h1>
</div>


<div class="d-flex mt-2 mb-1" style="padding-left: 15vw; padding-right: 15vw;">
    <table class = "table-dark table-bordered table">
        <tr class = "table-dark table-bordered">
            <td class = "table-dark table-bordered">Medicine Name</td>
            <td class = "table-dark table-bordered">Dose</td>
            <td class = "table-dark table-bordered">Amount</td>
        </tr>
        @foreach ($prescription->prescription_details as $prescription_detail)
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">{{$prescription_detail->medicine->name}}</td>
                <td class = "table-dark table-bordered">{{$prescription_detail->dose}}</td>
                <td class = "table-dark table-bordered">{{$prescription_detail->amount}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection