@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 m-auto">
            <form action="{{ route('admin.tables.update', $table->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="">
                    <label for="name" class="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $table->name }}" />
                </div>
                <div>
                    <label for="guest_number">Guest Number</label>
                    <input type="number" name="guest_number" id="guest_number" class="form-control" value="{{ $table->guest_number }}" />
                </div>
                <div>
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="pending" @if ($table->status == 'pending')
                            selected
                        @else
                            ''
                        @endif>Pending</option>
                        <option value="available" @if ($table->status == 'available')
                            selected
                        @else
                            ''
                        @endif>Available</option>
                        <option value="unavailable" @if ($table->status == 'unavailable')
                            selected
                        @else
                            ''
                        @endif>Unavailable</option>
                    </select>
                </div>
                <div>
                    <label for="location">Location</label>
                    <select name="location" id="location" class="form-control">
                        <option value="front" @if ($table->location == 'front')
                            selected
                        @else
                            ''
                        @endif>Front</option>
                        <option value="inside" @if ($table->location == 'inside')
                            selected
                        @else
                            ''
                        @endif>Inside</option>
                        <option value="outside" @if ($table->location == 'outside')
                            selected
                        @else
                            ''
                        @endif>Outside</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-md mt-4">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
