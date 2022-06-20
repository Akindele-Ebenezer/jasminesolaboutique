@extends('layout.layout')

@section('title', $page_title . ' | Jasmine SOLA Boutique')
@section('content')
@yield('page_title')
@yield('Shop')

    <div class="shop {{ Request::is('Perfumes') ? 'shop-wrapper' : '' }}">
        <div class="shop-inner">
            <div class="categories">
                <h1>CATEGORIES</h1>
                <ul>
                    <li class="{{ Request::is('Shop') ? 'active' : '' }}"><a href="/Shop">ALL</a></li>
                    <li class="{{ Request::is('PurchaseNow/Perfumes*', 'Perfumes*') ? 'active' : '' }}"><a href="/Perfumes">PERFUMES</a></li>
                    <li class="{{ Request::is('PurchaseNow/Bags*', 'Bags*') ? 'active' : '' }}"><a href="/Bags">BAGS</a></li>
                    <li class="{{ Request::is('PurchaseNow/Boxers*', 'Boxers*') ? 'active' : '' }}"><a href="/Boxers">BOXERS</a></li>
                    <li class="{{ Request::is('PurchaseNow/Shoes*', 'Shoes*') ? 'active' : '' }}">SHOES</li>
                    <li class="{{ Request::is('PurchaseNow/Hair*', 'Hair*') ? 'active' : '' }}">HAIR</li>
                    <li class="{{ Request::is('PurchaseNow/Singlets*', 'Singlets*') ? 'active' : '' }}"><a href="/Singlets">SINGLETS</a></li>
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
                            <input type="hidden" name="ProductType" value="{{ $Product->ProductType }}">
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