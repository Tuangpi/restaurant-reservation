@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class=""><a href="{{ route('admin.menus.create') }}" class="btn btn-success">Create</a></div>
            <table class="table">
                <thead>
                    <th>asdadfadf</th>
                    <th>adfadfadfd</th>
                    <th>fasdfadf</th>
                    <th>asdfadf</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>{{ $menu->price }}</td>
                        <td><a href="{{ route('admin.menus.edit', $menu->id) }}"><div class="btn btn-warning">Edit</div></a> <form action="{{ route('admin.menus.destroy', $menu->id) }} " method="POST" class="d-inline">@csrf @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
