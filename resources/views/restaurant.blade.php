
@extends('layout')
@section('title', 'Restaurants')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
@endsection


@section('content')
    <section style="background-image: url(assets/restaurant/blog-pattern-bg.png);" class="section">
        <div class="sec-wp2">
            <div class="container" style="min-height: 594px;">
                <div class="judul">
                    <h3 class="h3-title">Choose Your <span>Restaurant</span></h3>
                    <form method="GET" action="{{ route('restaurant.filter') }}" class="judul_kanan">
                        <div>
                            <label for="genre">Filter by Genre:</label>
                            <select name="genre_id" id="genre" class="form-control">
                                <option value="">All</option>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}" {{ isset($genre_id) && $genre->id == $genre_id ? 'selected' : '' }}>{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="city">Filter by city:</label>
                            <select name="city_id" id="city" class="form-control">
                                <option value="">All</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}" {{ isset($city_id) && $city->id == $city_id ? 'selected' : '' }}>{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="button-24">Filter</button>
                    </form>
                        
                </div>
                <div class="row row-cols-auto">
                    @foreach ($restaurants as $restaurant)
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="/restaurant-detail/{{$restaurant->id}}/detail">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top" src="{{asset('/storage/restaurant/'. $restaurant->image) }}" alt="Card image cap">
                                        <div class="card-content">
                                            <div>
                                                <h5 class="card-title">{{$restaurant->name}}</h5>
                                                <p class="card-text">{{$restaurant->cities->name}}, {{$restaurant->details->address}}</p>
                                                <p class="card-text">{{$restaurant->genres->name}}</p>
                                            </div>
                                            <div class="right">
                                                <h5><span class="badge badge-warning">{{$restaurant->rating}} ★</span></h5>
                                                
                                                <p class="card-text">{{$restaurant->details->price}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
@endsection