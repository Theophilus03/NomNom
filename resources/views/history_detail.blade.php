@extends('layout')
@section('title', 'Restaurants')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/history_detail.css') }}">
@endsection

@section('content')
    <section class="section">
        <div class="container content">
            <img src="{{asset('/storage/restaurant/'. $transaction->restaurant->image) }}"class="resto-bg">
            <div class="content2">
                <h2>{{$transaction->restaurant->name}} ({{$transaction->restaurant->details->address}})</h2>
                <h6 class="address">{{$transaction->restaurant->details->address_detail}}</h6>
                <div class="isi">
                    <div class="detail">
                        <h5 class="orange">Party Size</h5>
                        <h6>{{$transaction->people}} Guest</h6>
                    </div>
                    <div class="detail">
                        <h5 class="orange">Date</h5>
                        <h6>{{$transaction->day}} {{$transaction->month}} {{$transaction->year}}</h6>
                    </div>
                    <div class="detail">
                        <h5 class="orange">Time</h5>
                        <h6>{{$transaction->formatted_time}}</h6>
                    </div>
                </div>
                @if ($transaction->orders->isNotEmpty())
                    <div class="isi2">
                        <h4 class="orange"> Order</h4>
                        @foreach ($transaction->orders as $order)
                            <div class="card">
                                    <img class="card-img-top" src="{{asset('/storage/restaurant/'.$order->menu->image)}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4>{{$order->menu->name}}</h4>
                                        <p class="card-text">{{$order->menu->desc}}</p>
                                    </div>
                                    

                                    <div class="price">Rp.{{$order->menu->price}}</div>
                                    <div class="form-group">
                                        <div class="quantity"> X {{ $order->quantity }}</div>
                                    </div>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="isi3">
                <h4 class="uil-user"> {{$transaction->name}}</h4>
                <h5 class="user">{{$transaction->phone}} | {{$transaction->users->email}}</h5>
            </div>
            @if ($transaction->status == 0)
                <div class="reservation-status">
                    <p class="btn status ongoing">Ongoing</p>
                    <form action="{{ route('CancelReservation', ['id' => $transaction->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="button-79 btn">Cancel Reservation</button>
                    </form>
                </div>
            @else
                <div class="reservation-status">
                    <p class="btn status complete">Complete</p>
                </div>
            @endif
            
        </div>
    </section>
@endsection