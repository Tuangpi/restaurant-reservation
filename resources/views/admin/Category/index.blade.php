@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class=""><a href="{{ route('admin.categories.create') }}" class="btn btn-success">Create</a></div>
            <table class="table">
                <thead>
                    <th>asdadfadf</th>
                    <th>adfadfadfd</th>
                    <th>fasdfadf</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><img src="{{ Storage::url($category->image) }}" /></td>
                        <td><a href="{{ route('admin.categories.edit', $category->id) }}"><div class="btn btn-warning">Edit</div></a> <form action="{{ route('admin.categories.destroy', $category->id) }} " method="POST" class="d-inline">@csrf @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
