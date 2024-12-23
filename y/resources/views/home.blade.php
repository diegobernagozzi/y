@extends('layouts.app')

@section('content')


<home-component :image-path="'{{$imagePath}}'" :users="{{ $randomUsers->toJson() }}" :is-logged-in="{{ $isLoggedIn }}" :user="{{ json_encode($user) }}">
    
</home-component>

@endsection
