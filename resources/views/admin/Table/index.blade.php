@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class=""><a href="{{ route('admin.tables.create') }}" class="btn btn-success">Create</a></div>
            <table class="table">
                <thead>
                    <th>asdadfadf</th>
                    <th>adfadfadfd</th>
                    <th>fasdfadf</th>
                    <th>asdfadf</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($tables as $table)
                    <tr>
                        <td>{{ $table->name }}</td>
                        <td>{{ $table->location }}</td>
                        <td>{{ $table->status }}</td>
                        <td><a href="{{ route('admin.tables.edit', $table->id) }}"><div class="btn btn-warning">Edit</div></a> <form action="{{ route('admin.tables.destroy', $table->id) }} " method="POST" class="d-inline">@csrf @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
