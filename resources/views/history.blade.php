@extends('layout')
@section('title', 'Restaurants')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection

@section('content')
    <section class="section">
        <div class="container content">
            <h1>History</h1>
            
            @foreach ($transactions as $transaction)
                <a class="card" href="/history/{{$transaction->id}}">
                    <div class="date">
                        <h3 class="month">{{$transaction->month}} </h3>
                        <h3>{{$transaction->day}} </h3>
                        <h3>{{$transaction->year}} </h3>
                    </div>
                    <div class="detail">
                        <img src="{{asset('/storage/restaurant/'. $transaction->restaurant->logo) }}" alt="" class="logo">
                            
                        <div class="detail2">
                            <h2>{{$transaction->restaurant->name}}</h2>
                            <h5> <i class="uil uil-clock"></i> {{$transaction->formatted_time}}  | {{$transaction->people}} Guest</h5>
                        </div>
                        @if ($transaction->status == 0)
                            <p class="btn status ongoing">Ongoing</p>
                        @else
                            <p class="btn status complete">Complete</p>
                        @endif
                    </div>
                </a>
            @endforeach
            
        </div>
    </section>
@endsection