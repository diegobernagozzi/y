@extends('layouts.app')

@section('content')


<profile-component :user="{{ $user->toJson() }}" :posts="{{ $posts->toJson() }}">
    
</profile-component>

@endsection