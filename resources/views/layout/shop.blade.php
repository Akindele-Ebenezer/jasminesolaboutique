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
                @foreach($MostPopular as $Product)
                <form action="/PurchaseNow/{{ ucwords($ImageFolder) }}/{{ $Product->Id }}">
                    <p class="description">{{ $Product->Description }}</p>
                    <h1 class="sale">SALE</h1>
                    <div class="most-popular-inner">
                        <div style="background-image: url('/images/{{ $ImageFolder }}/{{ $Product->Image }}')"></div>
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
                            <input type="hidden" name="ProductDetail" value="{{ $Product->ProductDetail }}">
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