@extends('layouts.app')

@section('content')
<div class="our-menu">
    <h4>Step Two</h4>
</div>
<div class="card-container">
    <form action="{{ route('reservation.steptwo.store') }}" method="POST">
        @csrf
        <div>
            <label for="table">Table</label>
            <select name="table_id" id="table_id" class="form-control">
                @foreach ($tables as $table)
                <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} guest)</option>
                @endforeach
            </select>
            @error('table_id')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success btn-md mt-4">Make Reservation</button>
    </form>
</div>
@endsection