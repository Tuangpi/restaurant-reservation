@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 m-auto">
            <form action="{{ route('admin.reservations.store') }}" method="POST">
                @csrf
                <div class="">
                    <label for="first_name" class="">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" />
                    @error('first_name')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="">
                    <label for="last_name" class="">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" />
                    @error('last_name')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="">
                    <label for="email" class="">Email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                    @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="">
                    <label for="phone_no" class="">Tel Number</label>
                    <input type="text" name="phone_no" id="phone_no" class="form-control" />
                    @error('phone_no')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="res_date">Reservation Date</label>
                    <input type="datetime-local" name="res_date" id="res_date" class="form-control" />
                    @error('res_date')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
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
                <div>
                    <label for="guest_no">Guest Number</label>
                    <input type="number" name="guest_number" id="guest_no" class="form-control" />
                    @error('guest_number')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-md mt-4">Store</button>
            </form>
        </div>
    </div>
</div>
@endsection
