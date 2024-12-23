@extends('layouts.app')

@section('content')
<div class="container-fluid vh-100 d-flex align-items-center justify-content-center p-0 m-0">

    <div class="row w-100 h-100 g-0">

        <!-- Sezione immagine -->
        <div class="col-12 col-lg-6 p-0">
            <img src="{{ asset('images/y.jpg') }}"
                class="img-fluid w-100 d-none d-lg-block"
                alt="Descrizione immagine"
                style="height: 100vh; object-fit: cover;">

            <img src="{{ asset('images/y.jpg') }}"
                class="img-fluid d-block d-lg-none"
                alt="Descrizione immagine"
                style="object-fit: cover;">
        </div>

        <div class="col-12 col-lg-6 d-flex flex-column justify-content-center px-5 py-3">
            <h1 class="text-center fw-bold">Registrati</h1>

            <form method="POST" action="/register">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="user_name" value="{{ old('user_name') }}">
                    @error('user_name')
                    <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" v-model="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email')}}">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    @error('email')
                    <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" v-model="password" class="form-control" id="password" name="password">
                    @error('password')
                    <p style="color: red;">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info rounded-pill text-light fw-bold">Submit</button>
            </form>
        </div>
    </div>

</div>

@endsection