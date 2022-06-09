@extends('layout.shop')

@section('page_title')
    <div class="title" style="background-image: url('{{ asset('images/bgg.jpg') }}')">
        <div class="title-inner">
            <div>
                <h1>{{ $page_title }}</h1>
                <span>HOME &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp; CATEGORIES &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp; <strong>{{ $page_title }}</strong></span>
            </div>
        </div>
    </div>
@endsection

@section('Perfumes')
    @foreach($Perfumes as $Perfume)
        <a href="/PurchaseNow/{{ $Perfume->Id }}">
            <div class="product">
                <div style="background-image: url('images/perfumes/{{ $Perfume->Image }}')"></div>
                <p>{{ $Perfume->Name }}</p>
                <span>₦{{ $Perfume->Price }}</span>
                <br>
                <button>ORDER</button>
            </div>
        </a>
    @endforeach 
@endsection