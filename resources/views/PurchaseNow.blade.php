@extends('layout.shop')

@section('title', $page_title . ' | JASMINE Sola Boutique')
@section('purchase_now')
    <div class="purchase-now">
        <div class="purchase-now-inner">
            <h1>{{ $PerfumeDetails->Name }}</h1>
            <h2>{{ $PerfumeDetails->Description }}</h2>
            <div class="purchase-now-product" style="background-image: url('/images/perfumes/{{ $PerfumeDetails->Image }}')"></div>
        </div>
        <div class="purchase-now-inner">
            <h1>{{ $PerfumeDetails->Name }}</h1>
            <span>₦ {{ $PerfumeDetails->Price }}</span>
            <br>
            <button>PURCHASE NOW</button>
            <br>
            <h2>DESCRIPTION</h2>
            <p>{{ $PerfumeDetails->Description }}</p>
            <br>
            <h2>PRODUCT DETAIL</h2>
            <p>{{ $PerfumeDetails->ProductDetail }}</p>
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
            @foreach($Perfumes as $Perfume)
                <form action="/PurchaseNow/{{ $Perfume->Id }}" method="get">
                    <div class="product">
                        <div style="background-image: url('/images/perfumes/{{ $Perfume->Image }}')"></div>
                        <p>{{ $Perfume->Name }}</p>
                        <span>₦ {{ $Perfume->Price }}</span>
                        <br>
                        <button>ORDER</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection