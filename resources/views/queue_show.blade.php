<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Queue Information</title>
</head>
<body>
    <div>
        @if (isset($error))
            <ul>
                @foreach ($error as $error_message)
                    <li>{{$error_message}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <ul>
        <li>Queue ID: {{$queue->patient->name}}</li>
        <li>Waiting since: {{$queue->updated_at}}</li>
        <li>Patient name: {{$queue->patient->name}}</li>
        <li>Patient DOB: {{$queue->patient->dob}}</li>
    </ul>
    @foreach ($queue->patient->medical_report as $medical_report)
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
    @if ($current)
    <form action={{route('queue.current')}} method="POST">
        @csrf
        <input type="number" name="systolic_blood_pressure">
        <label for="systolic_blood_pressure">systolic blood pressure</label><br>
        <input type="number" name="diastolic_blood_pressure">
        <label for="diastolic_blood_pressure">diastolic blood pressure</label><br>
        <input type="number" name="respiratory_rate">
        <label for="respiratory_rate">respiratory rate</label><br>
        <input type="number" name="oxygen_saturation_level">
        <label for="oxygen_saturation_level">oxygen saturation level</label><br>
        <input type="number" name="body_temperature">
        <label for="body_temperature">body temperature</label><br>
        <input type="number" name="height">
        <label for="height">height</label><br>
        <input type="number" name="weight">
        <label for="weight">weight</label><br>
        <textarea name="symptoms" cols="30" rows="10" placeholder="symptoms"></textarea><br>
        <textarea name="diagnosis" cols="30" rows="10" placeholder="diagnosis"></textarea><br>
        <textarea name="suggestion" cols="30" rows="10" placeholder="suggestion"></textarea><br>
        <fieldset id="prescription_field">
            <input type="checkbox" name="enable_prescription" id=""><label for="enable_prescription">Attach a prescription</label><br>
            <input type="hidden" name="prescription_count" id="prescription_count" value="1">
            <select name="medicine_0" id="medicine_0">
                @foreach ($medicines as $medicine)
                    <option value={{$medicine->id}}>{{$medicine->name}}</option>
                @endforeach
            </select><input type="number" name="amount_0" id="" placeholder="amount"><input type="text" name="dose_0" id="" placeholder="dose"><button id="add_prescription" type="button">+</button>
        </fieldset>
        <button type="submit">Create medical report</button>
    </form>
    @endif

    <script>
        $(document).ready(function(){
            let cur_idx = 1;
            $("#add_prescription").click(function(){
                let medicine_select = $("<select></select>");
                let dose = $("<input></input>");
                let amount = $("<input></input>");
                medicine_select.attr({
                    name: 'medicine_' + cur_idx
                });
                dose.attr({
                    type: "text",
                    name: "dose_" + cur_idx,
                    placeholder: "dose"
                });
                amount.attr({
                    type: "number",
                    name: "amount_" + cur_idx,
                    placeholder: "amount"
                });
                $('#prescription_count').attr('value', ++cur_idx);
                $('#medicine_0 option').clone().appendTo(medicine_select);
                $('#add_prescription').before("<br>", medicine_select, amount, dose);
            });
        });
    </script>

</body>
</html>