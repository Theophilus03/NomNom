
@extends('layout')
@section('title', 'Restaurants')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@endsection

@section('content')
    <section class="section">
        <div class="wrapper">
            <div class="logo">
                <img src="{{ asset('assets/user.png') }}" alt="">
            </div>
            <div class="text-center mt-4 name">
                Profile
            </div>

            <form class="p-3 mt-3" method="POST" action="{{ route('UpdateProfile') }}">
                @csrf
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="name" id="name" placeholder="Name" class="@error('name') is-invalid @enderror" value="{{$user->name}}">
                </div>
                <div class="form-field d-flex align-items-center">
                    <span class="far uil-phone"></span>
                    <input type="text" name="phone" id="phone" placeholder="Phone" class="@error('Phone') is-invalid @enderror" value="{{$user->phone}}">
                </div>
            
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror">
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i id="icon"class="fa fa-eye-slash" aria-hidden="true"></i>
                    </span>
                </div>
              

                
                @error('email')
                    <div class="error">*{{ $message }}</div>
                @enderror
                @error('password')
                    <div class="error">*{{ $message }}</div>
                @enderror
                <button type="submit" class="btn mt-3">Update</button>
            </form>
        </div>
    </section>



    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const passwordFieldType = passwordField.getAttribute('type');
            const icon = document.getElementById('icon');
            const iconType = icon.getAttribute('class');
            if (passwordFieldType === 'password') {
                passwordField.setAttribute('type', 'text');
                icon.setAttribute('class', 'fa fa-eye');

            } else {
                passwordField.setAttribute('type', 'password');
                icon.setAttribute('class', 'fa fa-eye-slash');
            }
        }
    </script>
@endsection