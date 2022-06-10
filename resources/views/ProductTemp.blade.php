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

@section('ProductTemp')
    @foreach($Products as $Product)
        <form action="/PurchaseNow/{{ $ProductName }}/{{ $Product->Id }}">
            <div class="product">
                <div style="background-image: url('images/{{ $ImageFolder }}/{{ $Product->Image }}')"></div>
                <p>{{ $Product->Name }}</p>
                <span>₦{{ $Product->Price }}</span>
                <br>
                <input type="hidden" name="ProductId" value="{{ $Product->Id }}">
                <input type="hidden" name="ProductName" value="{{ $Product->Name }}">
                <input type="hidden" name="ProductPrice" value="{{ $Product->Price }}">
                <input type="hidden" name="ProductImage" value="{{ $Product->Image }}">
                <input type="hidden" name="ProductDescription" value="{{ $Product->Description }}">
                <input type="hidden" name="ProductDetail" value="{{ $Product->Detail }}">
                <button>ORDER</button>
            </div>
        </form>
    @endforeach 
@endsection
 