@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        
        {{-- Hero Box --}}
        <section class="general-hero">
            <div class="container">
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
            </div>
        </section>
    </main>
@endsection