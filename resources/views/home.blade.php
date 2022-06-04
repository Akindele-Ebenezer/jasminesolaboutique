@extends('layout.layout')

@section('content')
    <section class="sec-1" style="background-image: url('{{ asset('images/bg.jpg') }}')">
        <div class="sec-1-inner">
            <div>
                <h1>ONLINE STORE</h1> 
                <h2>JASMINE <span>SOLA</span></h2>
                <span>BOUTIQUE</span>
                <h3>SAVE UP TO 50%</h3>
                <p>IF YOU BUY UP TO THREE PRODUCTS</p>
                <center><button>SHOP NOW</button><button>CONTACT</button></center>
            </div>
        </div>
    </section>

    <section class="sec-2">
        <div class="sec-2-inner">
            <div>
                <img src="{{ asset('images/perfume.png') }}">
            </div>
            <p>PERFUMES</p>
        </div>
        <div class="sec-2-inner">
            <div>
                <img src="{{ asset('images/shopping-bag.png') }}">
            </div>
            <p>BAGS</p>
        </div>
        <div class="sec-2-inner">
            <div>
                <img src="{{ asset('images/high-heels.png') }}">
            </div>
            <p>SHOES</p>
        </div>
        <div class="sec-2-inner">
            <div>
                <img src="{{ asset('images/hair.png') }}">
            </div>
            <p>HAIR</p>
        </div>
        <div class="sec-2-inner">
            <div>
                <img src="{{ asset('images/vest.png') }}">
            </div>
            <p>SINGLETS</p>
        </div>
    </section>
@endsection