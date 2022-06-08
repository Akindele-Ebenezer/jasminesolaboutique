@extends('layout.shop')

@section('page_title')
    <div class="title" style="background-image: url('{{ asset('images/bg.jpg') }}')">
        <div class="title-inner">
            <div>
                <h1>{{ $page_title }}</h1>
                <span>HOME &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp; CATEGORIES &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp; {{ $page_title }}</span>
            </div>
        </div>
    </div>
@endsection

@section('Perfumes')
    @foreach($Perfumes as $Perfume)
        <form action="/PurchaseNow/{{ $Perfume->Id }}" method="get">
            <div class="product">
                <div style="background-image: url('images/perfumes/{{ $Perfume->Image }}')"></div>
                <p>{{ $Perfume->Name }}</p>
                <span>₦{{ $Perfume->Price }}</span>
                <br>
                <button>ORDER</button>
            </div>
        </form>
    @endforeach 
@endsection