@extends('layouts.app')

@section('content')


<home-component :image-path="'{{$imagePath}}'" :users="{{ $randomUsers->toJson() }}">
    
</home-component>

@endsection
