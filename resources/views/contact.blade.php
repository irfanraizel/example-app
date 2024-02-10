@extends('layouts.main')

@section('container')
    <h1 class="text-center">Contact Us</h1>
    <div class="d-flex justify-content-center">
        <div>
            <p>Phone Number : {{ $detail['phone'] }}</p>
            <p>WhatsApp : {{ $detail['whatsapp'] }}</p>
            <p>Email : {{ $detail['email'] }}</p>
            <p>Instagram : {{ $detail['instagram'] }}</p>
            <p>Address : {{ $detail['address'] }}</p>
        </div>
    </div>
@endsection