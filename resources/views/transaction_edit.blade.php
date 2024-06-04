<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Edit transaction</h1>
    <form action="{{route('transaction_header.update', ['transaction' => $transaction])}}" method="POST">
        @method('PATCH')
        @csrf
        <fieldset>
            <label for="completed">Completed: </label>
            <input type="checkbox" name="completed" id="" @checked($transaction->completed)><br>
            <label for="payment_method">Payment method: </label>
            <select name="payment_method" id="" value="{{$transaction->payment_method}}">
                <option value="Credit" @selected($transaction->payment_method == 'Credit')>Credit</option>
                <option value="Debit" @selected($transaction->payment_method == 'Debit')>Debit</option>
                <option value="Cash" @selected($transaction->payment_method == 'Cash')>Cash</option>
            </select>
        </fieldset>
        <fieldset>
            <input type="hidden" name="service_count" id="service_count" value="1">
            <label for="service_0">Service description:</label>
            <input type="text" name="service_0" id="">
            <label for="price_0">Service price:</label>
            <input type="number" name="price_0" id=""><button id="add_service" type="button">+</button><br>
        </fieldset>
        <button type="submit">Submit</button>
    </form>

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
</body>
</html>