@php
 
    $ProductId = $_GET['ProductId'];
    $ProductName = $_GET['ProductName'];
    $ProductImage = $_GET['ProductImage'];
    $ProductPrice = $_GET['ProductPrice'];
    $ProductDetail = $_GET['ProductDetail'];
    $ProductDescription = $_GET['ProductDescription']; 
    $page_title = $ProductName; 

@endphp

@extends('layout.shop')

@section('title', $page_title . ' | JASMINE Sola Boutique')
@section('purchase_now')
    <div class="purchase-now">
        <div class="purchase-now-inner">
            <h1>{{ $ProductName }}</h1>
            <h2>{{ $ProductDescription }}</h2>
            <div class="purchase-now-product" style="background-image: url('/images/{{ $ImageFolder }}/{{ $ProductImage }}')"></div>
        </div>
        <div class="purchase-now-inner">
            <h1>{{ $ProductName }}</h1>
            <span>₦ {{ $ProductPrice }}</span>
            <br>
            <button>PURCHASE NOW</button>
            <br>
            <h2>DESCRIPTION</h2>
            <p>{{ $ProductDescription }}</p>
            <br>
            <h2>PRODUCT DETAIL</h2>
            <p>{{ $ProductDetail }}</p>
            <br>
            <ul>
                <li>DELIVERY AND RETURN</li>
                <li>CONTACT FOR MORE INFORMATION</li>
            </ul>
        </div>
    </div>
    <div class="related-products-wrapper">
        <h1>RELATED PRODUCTS</h1>
        <div class="related-products"> 
            @foreach($RelatedProducts as $Product)
                <form action="/PurchaseNow/{{ $ProductNameForRoute }}/{{ $ProductId }}">
                    <div class="product">
                        <div style="background-image: url('/images/{{ $ImageFolder }}/{{ $Product->Image }}')"></div>
                        <p>{{ $Product->Name }}</p>
                        <span>₦ {{ $Product->Price }}</span>
                        <br>
                        <button>ORDER</button>
                        <input type="hidden" name="ProductId" value="{{ $Product->Id }}">
                        <input type="hidden" name="ProductName" value="{{ $Product->Name }}">
                        <input type="hidden" name="ProductPrice" value="{{ $Product->Price }}">
                        <input type="hidden" name="ProductImage" value="{{ $Product->Image }}">
                        <input type="hidden" name="ProductDescription" value="{{ $Product->Description }}">
                        <input type="hidden" name="ProductDetail" value="{{ $Product->ProductDetail }}">
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection