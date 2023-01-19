@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 m-auto">
            <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">
                    <label for="name" class="">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $menu->name }}" />
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" />
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $menu->description }}</textarea>
                </div>
                <div>
                    <label for="category">Category</label>
                    <select name="category[]" id="category" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($menu->categories->contains($category))
                                selected
                            @else
                                ''
                            @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ $menu->price }}" />
                </div>
                <button type="submit" class="btn btn-success btn-md mt-4">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
