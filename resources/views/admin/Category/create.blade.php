@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 m-auto">
            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="name" class="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" />
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-md mt-4">Store</button>
            </form>
        </div>
    </div>
</div>
@endsection
