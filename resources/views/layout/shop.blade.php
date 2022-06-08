@extends('layout.layout')

@section('title', $page_title . ' | Jasmine SOLA Boutique')
@section('content')
@yield('page_title')

    <div class="shop">
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
                @foreach($Perfumes as $Perfume)
                <form action="/PurchaseNow/{{ $Perfume->Id }}" method="get">
                    <div class="most-popular-inner">
                        <div style="background-image: url('/images/perfumes/{{ $Perfume->Image }}')"></div>
                        <div>
                            <h2>{{ $Perfume->Name }}</h2>
                            <span>₦ {{ $Perfume->Price }}</span>
                            <br>
                            <button>View</button>
                        </div>
                    </div>
                </form>
                @endforeach 
            </div>
        </div>
        <div class="shop-inner"> 
            @yield('Perfumes')
            @yield('purchase_now')
        </div>
    </div>
@endsection