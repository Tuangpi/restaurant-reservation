@extends('layouts.app')

@section('content')
<div class="card-container">
    @foreach ($categories as $category)
    <div class="card card-sm">
        <img src="{{ Storage::url($category->image) }}" alt="category image">
        <a href="{{ route('categories.show', $category->id) }}">
            <div class="card-title">{{ $category->name }}</div>
            <div class="card-body">{{ $category->description }}</div>
        </a>
    </div>
    @endforeach
</div>
@endsection