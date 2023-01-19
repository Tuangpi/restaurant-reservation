@extends('layouts.app')

@section('content')
<div class="our-menu">
    <h4>Step One</h4>
</div>
<div class="card-container">
    <form action="{{ route('reservation.stepone.store') }}" method="POST" class="form-control">
        @csrf
        <div class="">
            <label for="first_name" class="">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $reservation->first_name ?? '' }}" />
            @error('first_name')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="">
            <label for="last_name" class="">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $reservation->last_name ?? '' }}" />
            @error('last_name')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="">
            <label for="email" class="">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $reservation->email ?? '' }}" />
            @error('email')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="">
            <label for="phone_no" class="">Tel Number</label>
            <input type="text" name="phone_no" id="phone_no" class="form-control" value="{{ $reservation->phone_no ?? '' }}" />
            @error('phone_no')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="res_date">Reservation Date</label>
            <input type="datetime-local" name="res_date" id="res_date" class="form-control" value="{{ $reservation->res_date ?? '' }}" min="{{ $min_date }}" max="{{ $max_date }}" />
            @error('res_date')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="guest_no">Guest Number</label>
            <input type="number" name="guest_number" id="guest_no" class="form-control" value="{{ $reservation->guest_number ?? '' }}" />
            @error('guest_number')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success btn-md mt-4">Next</button>
    </form>
</div>
@endsection