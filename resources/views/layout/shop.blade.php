@php 
$ProductNameForRoute = '';
@endphp

@extends('layout.layout')

@section('title', $page_title . ' | Jasmine SOLA Boutique')
@section('content')
@yield('page_title')

    <div class="shop {{ Request::is('Perfumes') ? 'shop-wrapper' : '' }}">
        <div class="shop-inner">
            <div class="categories">
                <h1>CATEGORIES</h1>
                <ul>
                    <li class="{{ Request::is('ShopNow') ? 'active' : '' }}">ALL</li>
                    <li class="{{ Request::is('P*') ? 'active' : '' }}">PERFUMES</li>
                    <li class="{{ Request::is('Bags') ? 'active' : '' }}">BAGS</li>
                    <li class="{{ Request::is('Shoes') ? 'active' : '' }}">SHOES</li>
                    <li class="{{ Request::is('Hair') ? 'active' : '' }}">HAIR</li>
                    <li class="{{ Request::is('Singlets') ? 'active' : '' }}">SINGLETS</li>
                </ul>
                <div style="background-image: url('{{ asset('images/bgg.jpg') }}')"></div>
            </div>
            <div class="most-popular">
                <h1>MOST POPULAR</h1>
                @foreach($Products as $Product)
                <form action="/PurchaseNow/Perfumes/{{ $Product->Id }}">
                    <div class="most-popular-inner">
                        <div style="background-image: url('/images/{{ $ProductNameForRoute }}/{{ $Product->Image }}')"></div>
                        <div>
                            <h2>{{ $Product->Name }}</h2>
                            <span>₦ {{ $Product->Price }}</span>
                            <br>
                            <button>View</button>
                            <input type="hidden" name="ProductId" value="{{ $Product->Id }}">
                            <input type="hidden" name="ProductName" value="{{ $Product->Name }}">
                            <input type="hidden" name="ProductPrice" value="{{ $Product->Price }}">
                            <input type="hidden" name="ProductImage" value="{{ $Product->Image }}">
                            <input type="hidden" name="ProductDescription" value="{{ $Product->Description }}">
                            <input type="hidden" name="ProductDetail" value="{{ $Product->Detail }}">
                        </div>
                    </div>
                </form>
                @endforeach 
            </div>
        </div>
        <div class="shop-inner"> 
            @yield('ProductTemp')
            @yield('purchase_now')
        </div>
    </div>
@endsection