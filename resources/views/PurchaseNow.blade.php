@php
 
    $ProductId = $_GET['ProductId'];
    $ProductName = $_GET['ProductName'];
    $ProductImage = $_GET['ProductImage'];
    $ProductPrice = $_GET['ProductPrice'];
    $ProductDetail = $_GET['ProductDetail'];
    $ProductDescription = $_GET['ProductDescription']; 

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
            @foreach($Products as $Product)
                <a href="/PurchaseNow/{{ $ProductId }}">
                    <div class="product">
                        <div style="background-image: url('/images/perfumes/{{ $ProductImage }}')"></div>
                        <p>{{ $ProductName }}</p>
                        <span>₦ {{ $ProductPrice }}</span>
                        <br>
                        <button>ORDER</button>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection