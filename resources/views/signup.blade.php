
@extends('layout')
@section('title', 'Restaurants')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <section class="section">
        <div class="wrapper">
            <div class="logo">
                <img src="{{ asset('assets/home/logo.png') }}" alt="">
            </div>
            <div class="text-center mt-4 name">
                Sign up
            </div>
            <form class="p-3 mt-3" method="POST" action="{{ route('signup') }}">
                @csrf
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="email" id="email" placeholder="Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                </div>
            
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror" value="{{ old('password') }}">
                </div>

                <div class="form-field d-flex align-items-center">
                    <input type="text" name="name" id="name" placeholder="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
                </div>

                <div class="form-field d-flex align-items-center">
                    <input type="text" name="phone" id="phone" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                </div>
            

                
                @error('email')
                    <div class="error">*{{ $message }}</div>
                @enderror
                @error('password')
                    <div class="error">*{{ $message }}</div>
                @enderror
                @error('name')
                    <div class="error">*{{ $message }}</div>
                @enderror
                @error('phone')
                    <div class="error">*{{ $message }}</div>
                @enderror

                <button type="submit" class="btn mt-3">Sign up</button>
            </form>
            <div class="text-center">
                <a href="/login" class="button">Log in</a>
            </div>
        </div>
    </section>
@endsection