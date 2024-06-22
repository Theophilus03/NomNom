
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
                <p>{{$restaurants->cities->name}}, {{$restaurants->details->address}}</p>
                <i class="uil uil-clock"></i><i>  {{$restaurants->details->time_open}}:00 - {{$restaurants->details->time_close}}:00</i>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <a href="/restaurant-detail/{{$restaurants->id}}/detail" class="h4">Details</a>
                <a href="/restaurant-detail/{{$restaurants->id}}/menu" class="h4">Menu</a>
                <a href="/restaurant-detail/{{$restaurants->id}}/reservation" class="h4 active">Reservation</a>
            </div>
        </div>

        <div class="container container_form">
            <form action="{{ route('submitReservation', ['id' => $restaurants->id]) }}" method="post">
                @csrf
                <h2>Reservation Form</h2>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{$message}}</div>  
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <label for="phone">Your Phone Number</label>
                            <input type="number" name="number" class="form-control  @error('number') is-invalid @enderror" id="number" placeholder="Your Phone Number" value="{{ old('number') }}">
                            @error('number')
                                <div class="invalid-feedback">{{$message}}</div>  
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating date" id="date3" data-target-input="nearest">
                            <label for="datetime">Date</label>
                            <input type="datetime-local" name="datetime" class="form-control @error('datetime') is-invalid @enderror " value="{{ old('datetime') }}">
                            @error('datetime')
                                <div class="invalid-feedback">{{$message}}</div>  
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <label for="select1">Number Of Guest</label>
                            <select class="form-control" id="select1" name="people">
                              <option value="1">1 Guest</option>
                              <option value="2">2 Guest</option>
                              <option value="3">3 Guest</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <p>order</p>
                        <div class="order">
                            @foreach($menuData as $index => $menuItem)
                                @php
                                    $menu = \App\Models\Menu::find($menuItem['menu_id']);
                                    $totalPrice = $menu->price * $menuItem['quantity'];
                                @endphp
                                <div class="card">
                                    <div class="contents2">
                                        <div class="quantity">{{ $menuItem['quantity'] }} X</div>
                                        <div class="card-body">
                                            <h4>{{$menu->name}}</h4>
                                            <p class="card-text">{{$menu->desc}}</p>
                                        </div>
                                        
                                        <h3>Rp.{{$totalPrice}}</h3>
                                    </div>
                                </div>
                                <input type="hidden" name="menu_items[{{$index}}][menu_id]" value="{{ $menuItem['menu_id'] }}">
                                <input type="hidden" name="menu_items[{{$index}}][quantity]" value="{{ $menuItem['quantity'] }}">
                            @endforeach
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <label for="message">Special Request</label>
                            <textarea class="form-control" name="request" placeholder="Special Request" style="height: 100px" value="{{ old('request') }}"></textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="button-79 btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book Now</button>
                    </div>
                </div>
            </form>
            
        </div>
    </section>





    
@endsection

