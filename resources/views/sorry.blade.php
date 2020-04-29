@extends('layout')

@section('content')
    <div class="fail-details">

        <div class="icon">
            <img src="{{asset('img/failed.jpg')}}" alt="">
        </div>
        <h1>Transaction Failed</h1>
        @if(session()->has('message'))
            <div class="message">
                {{session('message')}}
            </div>
        @endif
        @if(session()->has('transaction'))
            <div class="details">
                <div class="item">
                    <span class="label">Transaction Id:&nbsp;</span>
                    {{--                <span class="value">sdfasd</span>--}}
                    <span class="value">{{session('transaction')['id']}}</span>
                </div>
                <div class="item">
                    <span class="label">Operation:&nbsp;</span>
                    <span class="value">{{session('transaction')['operation']}}</span>
                </div>
                <div class="item">
                    <span class="label">Status:&nbsp;</span>
                    <span class="value">{{session('transaction')['status']}}</span>
                </div>
                <div class="item">
                    <span class="label">Descriptor:&nbsp;</span>
                    <span class="value">{{session('transaction')['descriptor']}}</span>
                </div>
                <div class="item">
                    <span class="label">Amount:&nbsp;</span>
                    <span
                        class="value">{{session('transaction')['amount']}} {{session('transaction')['currency']}}</span>
                </div>
                <div class="item">
                    <span class="label">Fee:&nbsp;</span>
                    <span
                        class="value">{{session('transaction')['fee']['amount']}} {{session('transaction')['fee']['currency']}}</span>
                </div>
                <div class="item">
                    <span class="label">Card:&nbsp;</span>
                    <span class="value">{{session('transaction')['card']['bank']}}</span>
                </div>
            </div>
        @endif
    </div>

@endsection
