@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        
        {{-- Hero Box --}}
        <section class="general-hero" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>

        {{-- Comic Detail --}}
        <section class="details">
            <div class="container">
                <h1>{{ $comic['title'] }}</h1>
                <div class="price">{{ $comic['price'] }}</div>
                <div class="text">{!! $comic['body'] !!}</div>
            </div>
        </section>
    </main>
@endsection