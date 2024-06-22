
@extends('layout')
@section('title', 'Restaurants')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <img src="{{asset('/storage/restaurant/'. $restaurants->image) }}" alt="" class="resto-bg">
            <img src="{{asset('/storage/restaurant/'. $restaurants->logo) }}" alt="" class="logo">
            <div class="header">
                <h2 class="h2-title">{{$restaurants->name}}</h2>
                <h6>{{$restaurants->cities->name}}, {{$restaurants->details->address}}</h6>
                <i class="uil uil-clock"></i><i class="h6">  {{$restaurants->details->time_open}}:00 - {{$restaurants->details->time_close}}:00</i>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <a href="/restaurant-detail/{{$restaurants->id}}/detail" class="h4 active">Details</a>
                <a href="/restaurant-detail/{{$restaurants->id}}/menu" class="h4">Menu</a>
                <a href="/restaurant-detail/{{$restaurants->id}}/reservation" class="h4">Reservation</a>
            </div>
        </div>
        <div class="container">
            <div class="row row2 row-cols-auto">
                <div class="col-lg-6">
                    <p><h2>Address:</h2>{{$restaurants->details->address_detail}}</p>
                    <p><h2>Phone Number:</h2>{{$restaurants->details->phone}}</p>
                    <p><h2>Price Range:</h2>{{$restaurants->details->price_range}}</p>
                    <p><h2>Award:</h2>{{$restaurants->details->award}}</p>

                </div>
                <div class="container2">
                    
                    <h2> <i class="uil uil-location-point"></i> Get Direction Now:</h2>
                    <iframe src="{{$restaurants->details->gmaps}}" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection