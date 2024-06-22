
@extends('layout')
@section('title', 'Restaurants')



@section('content')
    <section class="main-banner">
        <div class="banner-shape-1 w-100" data-depth="0.30">
            <img src="assets/home/berry.png" alt="">
        </div>
        <div class="banner-shape-2 w-100" data-depth="0.25">
            <img src="assets/home/leaf.png" alt="">
        </div>
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <h1 class="h1-title">
                                Welcome to <span>NOM NOM!</span>
                            </h1>
                            <p>This is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eius
                                vel tempore consectetur nesciunt? Nam eius tenetur recusandae optio aperiam.</p>
                    
                            <form method="GET" action="{{ route('restaurant.filter') }}" class="judul_kanan">
                                <div class="search">
                                    <div>
                                        <select name="city_id" id="city" class="form-control">
                                            <option value="">Choose Your City</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="banner-btn">
                                        <button type="submit" class="sec-btn">Search</button>
                                    </div>
                                </div>
                            </form>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img-wp">
                            <div class="banner-img" style="background-image: url(assets/home/main-background.png);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section style="background-image: url(assets/home/menu-bg.png);" class="section">
        <div class="sec-wp">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="h2-title">Limited Offer</h2>
                    <div class="sec-title-shape mb-4">
                        <img src="assets/home/title-shape.svg" alt="">
                    </div>
                </div>
                
                <div class="d-flex justify-content-center">
                    <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($promos as $index => $id)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index-1 }}" class="{{ $index-1 == 0 ? 'active' : '' }}"></li>
                             @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($promos as $promo)
                                <div class="carousel-item {{ $promo->id-1 === 0 ? 'active' : '' }}">
                                    <img class="d-block w-100 promo" src="storage\{{$promo->image}}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-wp">
            <div class="container">
                <div class="margin">
                    <div class="text-center mb-5">
                        <h2 class="h2-title">Type Of Cuisine</h2>
                        <div class="sec-title-shape mb-4">
                            <img src="assets/home/title-shape.svg" alt="">
                        </div>
                    </div>

                    <div class="text-center mb-5">
                        <div class="dish-list">
                            @foreach ($genres as $genre)
                                <div class="dish-box">
                                    <a href="/restaurant/filter?genre_id={{$genre->id}}&city_id=">
                                        <div class="dish-img">
                                            <img src="storage/dish/{{$genre->image}}" alt="">
                                        </div>
                                        
                                        <div class="dish-title">
                                            <h3 class="h3-title">{{$genre->name}}</h3>
                                           
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
