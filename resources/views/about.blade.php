@extends('layouts.main')
@section('container')
    <h1 class="d-flex justify-content-center">Ini Halaman About</h1>
    <div class="d-flex justify-content-around p-20">
        @foreach ($aboutList as $a)
            <div style="margin: 100px 0;">
                <a href="about/{{ $a['slug'] }}" class="nav-link text-decoration-none">
                    <h3 class="text-center">{{ $a['name'] }}</h3>
                    <img src="img/{{ $a['image'] }}" alt="{{ $a['name'] }}" width="300"
                        class="img-thumbnail rounded-circle m-5">
                    <h4 class="text-center">{{ $a['email'] }}</h4>
                    <p class="text-center">{{ $a['quote'] }}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection
