@extends('layouts.app')

@section('content')
<div class="our-menu">
    <h4>Our Menu</h4>
    <h2>Today's Speciality</h2>
</div>
<div class="card-container">
    @foreach ($menus as $menu)
    <div class="card card-sm">
        <img src="" alt="asdf">
        <div class="card-title">{{ $menu->name }}</div>
        <div class="card-body">{{ $menu->description }}</div>
        <div>{{ $menu->price }}</div>
    </div>
    @endforeach
</div>
@endsection