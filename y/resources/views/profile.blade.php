@extends('layouts.app')

@section('content')


<profile-component :user="{{ $user->toJson() }}">
    
</profile-component>

@endsection