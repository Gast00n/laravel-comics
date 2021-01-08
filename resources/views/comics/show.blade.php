@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        
        {{-- Hero Box --}}
        <section class="general-hero bb-blue" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>

        {{-- Comic Detail --}}
        <section class="details">
            <div class="container">
                <div class="detail-sx">
                    <h1>{{ $comic['title'] }}</h1>
                    <div class="green-box mb-3">
                        <div class="price-holder">
                            <span class="price">U.S. Price {{ $comic['price'] }}</span>
                            <span>Available on 11/10</span>    
                        </div>
                        <div class="check-av">
                            Check Availability
                        </div>
                    </div>
                    <div class="text">
                        {!! $comic['body'] !!}
                    </div>

                </div>
                <div class="adv">
                    <h3>Advertisement</h3>
                    <img src="{{ asset('images/adv.png') }}" alt="">
                </div>
            </div>
        </section>

        {{-- Comic Info --}}
        <section class="comic-info">
            <div class="container">

            </div>
        </section>
    </main>
@endsection