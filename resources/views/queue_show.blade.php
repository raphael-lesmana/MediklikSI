@extends('template.file')
@extends('template.background')

@section("title", "Patient's Information")

@section('content')

    <div>
        @if (isset($error))
            <ul>
                @foreach ($error as $error_message)
                    <li>{{$error_message}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="d-flex justify-content-center mt-3 mb-2">
        <h1>Patient's Information</h1>
    </div>

    <div class="d-flex" style="margin-left: 20vw; margin-right: 20vw">
        <table class = "table-dark table-bordered table">
            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Queue ID</td>
                <td class = "table-dark table-bordered">{{$queue->patient->id}}</td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Waiting Since</td>
                <td class = "table-dark table-bordered">{{$queue->updated_at}}</td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Patient's Name</td>
                <td class = "table-dark table-bordered">{{$queue->patient->name}}</td>
            </tr>

            <tr class = "table-dark table-bordered">
                <td class = "table-dark table-bordered">Patient's DOB</td>
                <td class = "table-dark table-bordered">{{$queue->patient->dob}}</td>
            </tr>
        </table>
    </div>

    @foreach ($queue->patient->medical_report as $medical_report)
        <div class="d-flex justify-content-center mt-2 mb-1">
            <h2>Medical report from {{$medical_report->created_at}}</h2>
        </div>

        <div class="d-flex justify-content-center" style="margin-left: 10vw; margin-right: 10vw">
            <table class = "table-dark table-bordered table">
                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Doctor's Name</td>
                    <td class = "table-dark table-bordered">{{$medical_report->doctor->name}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Systolic Blood Pressure</td>
                    <td class = "table-dark table-bordered">{{$medical_report->systolic_blood_pressure}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Diastolic Blood Pressure</td>
                    <td class = "table-dark table-bordered">{{$medical_report->diastolic_blood_pressure}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Respiratory Rate</td>
                    <td class = "table-dark table-bordered">{{$medical_report->respiratory_rate}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Oxygen Saturation Level</td>
                    <td class = "table-dark table-bordered">{{$medical_report->oxygen_saturation_level}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Body Temperature</td>
                    <td class = "table-dark table-bordered">{{$medical_report->body_temperature}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Height</td>
                    <td class = "table-dark table-bordered">{{$medical_report->height}}</td>
                </tr>
                
                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Weight</td>
                    <td class = "table-dark table-bordered">{{$medical_report->weight}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Symptoms</td>
                    <td class = "table-dark table-bordered">{{$medical_report->symptoms}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Weight</td>
                    <td class = "table-dark table-bordered">{{$medical_report->weight}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Diagnosis</td>
                    <td class = "table-dark table-bordered">{{$medical_report->diagnosis}}</td>
                </tr>

                <tr class = "table-dark table-bordered">
                    <td class = "table-dark table-bordered">Suggestion</td>
                    <td class = "table-dark table-bordered">{{$medical_report->Suggestion}}</td>
                </tr>
            </table>
        </div>
    @endforeach

    <div class="d-flex justify-content-center">
        @if ($current)
        <form action={{route('queue.current')}} method="POST">
            @csrf

            <div class="mb-1 row">
                <label for="systolic_blood_pressure" class="col-sm-2 col-form-label">Systolic Blood Pressure</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="systolic_blood_pressure">
                </div>
            </div>

            <div class="mb-1 row">
                <label for="diastolic_blood_pressure" class="col-sm-2 col-form-label">Diastolic Blood Pressure</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="diastolic_blood_pressure">
                </div>
            </div>

            <div class="mb-1 row">
                <label for="respiratory_rate" class="col-sm-2 col-form-label">Respiratory Rate</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="respiratory_rate">
                </div>
            </div>

            <div class="mb-1 row">
                <label for="oxygen_saturation_level" class="col-sm-2 col-form-label">Oxygen Saturation Level</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="oxygen_saturation_level">
                </div>
            </div>

            <div class="mb-1 row">
                <label for="body_temperature" class="col-sm-2 col-form-label">Body Temperature</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="body_temperature">
                </div>
            </div>

            <div class="mb-1 row">
                <label for="height" class="col-sm-2 col-form-label">Height</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="height">
                </div>
            </div>

            <div class="mb-1 row">
                <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="weight">
                </div>
            </div>

            <div class="mb-1 row">
                <label for="symptoms" class="col-sm-2 col-form-label">Symptoms</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="symptoms" cols="60" rows="3" placeholder="symptoms"></textarea>
                </div>
            </div>

            <div class="mb-1 row">
                <label for="diagnosis" class="col-sm-2 col-form-label">Diagnosis</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="diagnosis" cols="60" rows="3" placeholder="diagnosis"></textarea>
                </div>
            </div>

            <div class="mb-1 row">
                <label for="suggestion" class="col-sm-2 col-form-label">Suggestion</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="suggestion" cols="60" rows="3" placeholder="suggestion"></textarea>
                </div>
            </div>

            <fieldset id="prescription_field">
                <input type="checkbox" name="enable_prescription" id="">
                <label for="enable_prescription">Attach a prescription</label><br>

                <input type="hidden" name="prescription_count" id="prescription_count" value="1">

                <select name="medicine_0" id="medicine_0" style="margin-right: 1vw">
                    @foreach ($medicines as $medicine)
                        <option value={{$medicine->id}}>{{$medicine->name}}</option>
                    @endforeach
                </select>

                <input type="number" name="amount_0" id="" placeholder="amount" style="margin-right: 1vw">
                <input type="text" name="dose_0" id="" placeholder="dose" style="margin-right: 1vw">
                <button class="btn btn-light" id="add_prescription" type="button">+</button>
            </fieldset>
            
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-secondary" type="submit" id="add_prescription">Create medical report</button>
            </div>
        </form>
        @endif
    </div>

    <script>
        $(document).ready(function(){
            let cur_idx = 1;
            $("#add_prescription").click(function(){
                let medicine_select = $("<select></select>");
                let dose = $("<input></input>");
                let amount = $("<input></input>");
                medicine_select.attr({
                    name: "medicine_" + cur_idx,
                    style: "margin-right: 1vw"
                });
                dose.attr({
                    type: "text",
                    name: "dose_" + cur_idx,
                    style: "margin-right: 1vw",
                    placeholder: "dose"
                });
                amount.attr({
                    type: "number",
                    name: "amount_" + cur_idx,
                    style: "margin-right: 1vw",
                    placeholder: "amount"
                });
                $('#prescription_count').attr('value', ++cur_idx);
                $('#medicine_0 option').clone().appendTo(medicine_select);
                $('#add_prescription').before("<br>", medicine_select, amount, dose);
            });
        });
    </script>

@endsection