
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
                <a href="/restaurant-detail/{{$restaurants->id}}/menu" class="h4 active">Menu</a>
                <a href="/restaurant-detail/{{$restaurants->id}}/reservation" class="h4">Reservation</a>
            </div>
        </div>

        <div class="container">
            <form action="{{ route('getReservePage', ['id' => $restaurants->id]) }}" method="GET" class="form">
                
                @foreach ($menus as $menu)
                    <div class="card">
                        <div class="contents">
                            <img class="card-img-top" src="{{asset('/storage/restaurant/'.$menu->image)}}" alt="Card image cap">
                            <div class="card-body">
                                <h4>{{$menu->name}}</h4>
                                <p class="card-text">{{$menu->desc}}</p>
                            </div>
                            

                            <h6>Rp.{{$menu->price}}</h6>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Quantity</label>
                                <select name="quantity[{{$menu->id}}]" class="form-control" id="quantity[{{$menu->id}}]">
                                    <option>0</option>
                                    <option value=1 >1</option>
                                    <option value=2 >2</option>
                                    <option value=3 >3</option>
                                    <option value=4 >4</option>
                                    <option value=5 >5</option>
                                </select>
                                <input type="hidden" name="menu_id[]" value="{{$menu->id}}">
                            </div>

                        </div>
                    </div>
                @endforeach
                <div>
                    <button type="submit" class="button-79">Reservation</button>
                </div>
            </form>
        </div>

    </section>
@endsection