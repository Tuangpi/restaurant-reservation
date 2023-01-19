@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class=""><a href="{{ route('admin.reservations.create') }}" class="btn btn-success">Create</a></div>
            <table class="table">
                <thead>
                    <th>asdadfadf</th>
                    <th>adfadfadfd</th>
                    <th>fasdfadf</th>
                    <th>asdfadf</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->res_date }}</td>
                        <td>{{ $reservation->table->name }}</td>
                        <td><a href="{{ route('admin.reservations.edit', $reservation->id) }}"><div class="btn btn-warning">Edit</div></a> <form action="{{ route('admin.reservations.destroy', $reservation->id) }} " method="POST" class="d-inline">@csrf @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection