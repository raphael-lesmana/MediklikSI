@extends('template.file')
@extends('template.background')

@section('title', 'Transaction Information')

@section('content')
    <div class="d-flex justify-content-center mt-3 mb-2">
        <h1>Edit Transaction</h1>
    </div>

    <div style="padding-left: 25vw; padding-right: 25vw;">
        <form action="{{route('transaction_header.update', ['transaction' => $transaction])}}" method="POST">
            @method('PATCH')
            @csrf
            <table class="table table-borderless">
                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">
                        <label for="completed">Completed</label></td>
                    <td class = "table-dark table-bordered">
                        <input type="checkbox" name="completed" id="" @checked($transaction->completed)></td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">
                        <label for="payment_method">Payment method</label></td>
                    <td class = "table-dark table-bordered">
                        <select name="payment_method" id="" value="{{$transaction->payment_method}}">
                            <option value="Credit" @selected($transaction->payment_method == 'Credit')>Credit</option>
                            <option value="Debit" @selected($transaction->payment_method == 'Debit')>Debit</option>
                            <option value="Cash" @selected($transaction->payment_method == 'Cash')>Cash</option>
                        </select></td>
                </tr>
            </table>

            <fieldset>
                <input type="hidden" name="service_count" id="service_count" value="1">

                <div class="mb-1 row">
                    <label for="service_0" class="col-sm-2 col-form-label">Service Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="service_0" id="">
                    </div>
                </div>

                <div class="mb-1 row">
                    <label for="price_0" class="col-sm-2 col-form-label">Service Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price_0" id=""><button id="add_service" type="button">+</button>
                    </div>
                </div>
                
            </fieldset>
            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            let cur_idx = 1;
            $("#add_service").click(function(){
                let service_label = $("<label>Service description: </label>");
                let service_input = $("<input type=\"text\">");
                let price_label = $("<label>Service price: </label>");
                let price_input = $("<input type=\"number\">");
                service_label.attr({
                    for: "service_" + cur_idx,
                });
                price_label.attr({
                    for: "price_" + cur_idx,
                });
                service_input.attr({
                    name: "service_" + cur_idx,
                });
                price_input.attr({
                    for: "price_" + cur_idx,
                });
                $('#service_count').attr('value', ++cur_idx);
                $('#add_service').before("<br>", service_label, service_input, price_label, price_input);
            });
        });
    </script>
@endsection