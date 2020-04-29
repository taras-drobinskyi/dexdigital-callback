@extends('layout')

@section('content')

    <div class="success-details">

        <div class="icon">
            <img src="{{asset('img/confirmed.jpg')}}" alt="">
        </div>
        <h1>Thank you!!!</h1>
        <h2>Successful Payment</h2>

        <span><a href="{{route('welcome')}}">Back home</a></span>

    </div>

@endsection
