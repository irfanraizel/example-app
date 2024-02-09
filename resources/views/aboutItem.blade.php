@extends('layouts.main')

@section('container')
    <div class="">
        <div class="float-start">
            <h1 class="text-center">{{ $aboutItem['name'] }}</h1>
            <img src="../img/{{ $aboutItem['image'] }}" alt="{{ $aboutItem['name'] }}" width="300"
                class="img-thumbnail rounded-circle m-5">
            <h4 class="text-center">{{ $aboutItem['email'] }}</h4>
            <h5 class="text-center">{{ $aboutItem['quote'] }}</h5>
        </div>
        <p class="float-none">{{ $aboutItem['detail'] }}</p>
    </div>

    <a href="/about">Back To About</a>
@endsection
