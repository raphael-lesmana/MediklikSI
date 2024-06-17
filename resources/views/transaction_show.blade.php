@extends('template.file')
@extends('template.background')

@section('title', 'Transaction Information')

@section('content')

    <div class="d-flex justify-content-center mt-3 mb-2">
        <h1>Transaction Info</h1>
    </div>

    <div class="d-flex" style="padding-left: 15vw; padding-right: 15vw;">
        <table class = "table-dark table-bordered table">
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Patient's Name</td>
                <td class = "table-dark table-bordered">{{$transaction->patient->name}}</td>
            </tr>
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Completed</td>
                <td class = "table-dark table-bordered">{{$transaction->completed}}</td>
            </tr>
        </table>
    </div>


    <div class="d-flex justify-content-center mt-2 mb-1">
        <h2>Services</h2>
    </div>

    @if (sizeof($services) > 0)
        <div class="d-flex" style="padding-left: 15vw; padding-right: 15vw;">
            <table class = "table-dark table-bordered table">
                <tr class = "table-dark table-bordered">
                    <th class = "table-dark table-bordered">Service Description</th>
                    <th class = "table-dark table-bordered">Service Price</th>
                </tr>
                @foreach ($services as $service)
                    <tr class = "table-dark table-bordered">
                        <td class = "table-dark table-bordered">{{$service->service_description}}</td>
                        <td class = "table-dark table-bordered">{{$service->service_price}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        <div class="d-flex justify-content-center">None</div>
    @endif

@endsection