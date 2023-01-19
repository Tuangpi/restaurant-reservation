@extends('layouts.app')

@section('content')
<div class="card-container">
    <div class="card card-sm">
        <img src="{{ Storage::url($category->image) }}" alt="category image">
        <div class="card-title">{{ $category->name }}</div>
        <div class="card-body">{{ $category->description }}</div>
    </div>
</div>
@endsection