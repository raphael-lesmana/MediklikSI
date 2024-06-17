@extends('template.file')
@extends('template.background')

@section('title', 'Create Queue')

@section('content')
<div class="mt-5">
    <div class="d-flex justify-content-center mb-3">
        <h1>Add Patient to Queue</h1>
    </div>    

    <div class="d-flex justify-content-center">
        <form action={{route('queue.index')}} method="POST">
            @csrf
            <input type="text" name="patient_id" id="" placeholder="name">
            <select name="staff_id" id="" style="height: 30px">
                @foreach ($staff as $staff_member)
                    <option value={{$staff_member->id}}>{{$staff_member->full_name}}</option>
                @endforeach
            </select>

            <div class="d-flex justify-content-center mt-2">
                <button type="submit" class="btn btn-secondary">Create</button>
            </div>
        </form>
    </div>

</div>
@endsection