@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        
        {{-- Hero Box --}}
        <section class="general-hero">
            <div class="container">
                <div class="title-box">
                    <h2>Current Series</h2>
                </div>
                <img src="{{ asset('images/cover-home.jpg') }}" alt="">
            </div>
        </section>

        {{-- Comics Box --}}
        <section class="comics">
            <div class="container">
                <ul class="comics-list">
                    @foreach ($comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['id']) }}">
                                <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                                <h3>{{ $comic['title'] }}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <a href="/" class="btn">Load More</a>
            </div>
        </section>

        {{-- Site Section --}}
        <ul class="sitemap mb-6">
            <li>
                <img src="{{ asset('images/digital-comics.png') }}" alt="">
                <h4>Digital Comics</h4>
            </li>
            <li>
                <img src="{{ asset('images/merchandise.png') }}" alt="">
                <h4>DC Merchandise</h4>
            </li>
            <li>
                <img src="{{ asset('images/subscriptions.png') }}" alt="">
                <h4>Subscription</h4>
            </li>
            <li>
                <img src="{{ asset('images/shop-locator.png') }}" alt="">
                <h4>Comic Shop Locator</h4>
            </li>
            <li>
                <img src="{{ asset('images/power-visa.svg') }}" alt="">
                <h4>DC Power Visa</h4>
            </li>
        </ul>
    </main>
@endsection
