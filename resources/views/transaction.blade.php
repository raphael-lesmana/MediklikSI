@extends('template.file')
@extends('template.background')

@section('title', 'Transactions')

@section('content')
<div>
    <div class="d-flex justify-content-center mt-3 mb-5">
        <h1>Unprocessed Transactions</h1>
    </div>

    <div>
        @if (sizeof($transactions) > 0)
            <ul>
                @foreach ($transactions as $transaction)
                    <li>{{$transaction->id}} {{$transaction->patient->name}}</li>
                @endforeach
            </ul>
        @else
            <div class="d-flex justify-content-center">
            No Unprocessed Transactions
            </div>
        @endif
    </div>
</div>
@endsection