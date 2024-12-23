@extends('layouts.app')

@section('content')


<profile-component :user="{{ $user->toJson() }}" :posts="{{ $posts->toJson() }}" :is-logged-in="{{ $isLoggedIn }}">
    
</profile-component>

@endsection