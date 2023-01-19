@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 m-auto">
            <form action="{{ route('admin.tables.store') }}" method="POST">
                @csrf
                <div class="">
                    <label for="name" class="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                <div>
                    <label for="guest_number">Guest Number</label>
                    <input type="number" name="guest_number" id="guest_number" class="form-control" />
                </div>
                <div>
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="pending">Pending</option>
                        <option value="available">Available</option>
                        <option value="unavailable">Unavailable</option>
                    </select>
                </div>
                <div>
                    <label for="location">Location</label>
                    <select name="location" id="location" class="form-control">
                        <option value="front">Front</option>
                        <option value="inside">Inside</option>
                        <option value="outside">Outside</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-md mt-4">Store</button>
            </form>
        </div>
    </div>
</div>
@endsection
