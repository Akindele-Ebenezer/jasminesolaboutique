@extends('layout.shop')

@section('page_title')
    <div class="title" style="background-image: url('/images/{{ $PageTitleBg }}')">
        <div class="title-inner">
            <div>
                <h1>{{ $page_title }}</h1>
                <span>HOME &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp; CATEGORIES &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp; <strong>{{ $page_title }}</strong></span>
            </div>
        </div>
    </div>
@endsection

@section('Shop')
    
    <div class="from-shop-title"> 
        <h2>{{ $ProductNameForRoute }}</h2>
    </div>
    <div class="from-shop">
        @foreach($Perfumes as $Perfume)
            <form action="/PurchaseNow/{{ $ProductNameForRoute }}/{{ $Perfume->Id }}">
                <div class="product">
                    <p class="description">{{ $Perfume->Description }}</p>
                    <h1>SALE</h1>
                    <div style="background-image: url('/images/perfumes/{{ $Perfume->Image }}')"></div>
                    <p>{{ $Perfume->Name }}</p>
                    <span>₦ {{ $Perfume->Price }}</span>
                    <br>
                    <button class="button-1">ORDER</button>
                    <input type="hidden" name="ProductId" value="{{ $Perfume->Id }}">
                    <input type="hidden" name="ProductName" value="{{ $Perfume->Name }}">
                    <input type="hidden" name="ProductPrice" value="{{ $Perfume->Price }}">
                    <input type="hidden" name="ProductImage" value="{{ $Perfume->Image }}">
                    <input type="hidden" name="ProductDescription" value="{{ $Perfume->Description }}">
                    <input type="hidden" name="ProductDetail" value="{{ $Perfume->ProductDetail }}">
                    <input type="hidden" name="ProductType" value="{{ $Perfume->ProductType }}">
                </div>
            </form>
        @endforeach 
    </div>
    <div class="from-shop-title"> 
        <h2>{{ $ProductNameForRoute_2 }}</h2>
    </div>
    <div class="from-shop">
        @foreach($Bags as $Bag)
            <form action="/PurchaseNow/{{ $ProductNameForRoute_2 }}/{{ $Bag->Id }}">
                <div class="product">
                    <p class="description">{{ $Bag->Description }}</p>
                    <h1>SALE</h1>
                    <div style="background-image: url('/images/bags/{{ $Bag->Image }}')"></div>
                    <p>{{ $Bag->Name }}</p>
                    <span>₦ {{ $Bag->Price }}</span>
                    <br>
                    <button class="button-1">ORDER</button>
                    <input type="hidden" name="ProductId" value="{{ $Bag->Id }}">
                    <input type="hidden" name="ProductName" value="{{ $Bag->Name }}">
                    <input type="hidden" name="ProductPrice" value="{{ $Bag->Price }}">
                    <input type="hidden" name="ProductImage" value="{{ $Bag->Image }}">
                    <input type="hidden" name="ProductDescription" value="{{ $Bag->Description }}">
                    <input type="hidden" name="ProductDetail" value="{{ $Bag->ProductDetail }}">
                    <input type="hidden" name="ProductType" value="{{ $Bag->ProductType }}">
                </div>
            </form>
        @endforeach 
    </div>
    <div class="from-shop-title"> 
        <h2>{{ $ProductNameForRoute_3 }}</h2>
    </div>
    <div class="from-shop">
        @foreach($Singlets as $Singlet)
            <form action="/PurchaseNow/{{ $ProductNameForRoute_3 }}/{{ $Singlet->Id }}">
                <div class="product">
                    <p class="description">{{ $Singlet->Description }}</p>
                    <h1>SALE</h1>
                    <div style="background-image: url('/images/singlets/{{ $Singlet->Image }}')"></div>
                    <p>{{ $Singlet->Name }}</p>
                    <span>₦ {{ $Singlet->Price }}</span>
                    <br>
                    <button class="button-1">ORDER</button>
                    <input type="hidden" name="ProductId" value="{{ $Singlet->Id }}">
                    <input type="hidden" name="ProductName" value="{{ $Singlet->Name }}">
                    <input type="hidden" name="ProductPrice" value="{{ $Singlet->Price }}">
                    <input type="hidden" name="ProductImage" value="{{ $Singlet->Image }}">
                    <input type="hidden" name="ProductDescription" value="{{ $Singlet->Description }}">
                    <input type="hidden" name="ProductDetail" value="{{ $Singlet->ProductDetail }}">
                    <input type="hidden" name="ProductType" value="{{ $Singlet->ProductType }}">
                </div>
            </form>
        @endforeach 
    </div>
    <div class="from-shop-title"> 
        <h2>{{ $ProductNameForRoute_4 }}</h2>
    </div>
    <div class="from-shop">
        @foreach($Boxers as $Boxer)
            <form action="/PurchaseNow/{{ $ProductNameForRoute_4 }}/{{ $Boxer->Id }}">
                <div class="product">
                    <p class="description">{{ $Boxer->Description }}</p>
                    <h1>SALE</h1>
                    <div style="background-image: url('/images/boxers/{{ $Boxer->Image }}')"></div>
                    <p>{{ $Boxer->Name }}</p>
                    <span>₦ {{ $Boxer->Price }}</span>
                    <br>
                    <button class="button-1">ORDER</button>
                    <input type="hidden" name="ProductId" value="{{ $Boxer->Id }}">
                    <input type="hidden" name="ProductName" value="{{ $Boxer->Name }}">
                    <input type="hidden" name="ProductPrice" value="{{ $Boxer->Price }}">
                    <input type="hidden" name="ProductImage" value="{{ $Boxer->Image }}">
                    <input type="hidden" name="ProductDescription" value="{{ $Boxer->Description }}">
                    <input type="hidden" name="ProductDetail" value="{{ $Boxer->ProductDetail }}">
                    <input type="hidden" name="ProductType" value="{{ $Boxer->ProductType }}">
                </div>
            </form>
        @endforeach 
    </div>
    
@endsection

@section('ProductTemp') 
    @foreach($Perfumes as $Product)
        <form action="/PurchaseNow/{{ $ProductName }}/{{ $Product->Id }}">
            <div class="product">
                <p class="description">{{ $Product->Description }}</p>
                <h1>SALE</h1>
                <div style="background-image: url('images/{{ $ImageFolder }}/{{ $Product->Image }}')"></div>
                <p>{{ $Product->Name }}</p>
                <span>₦{{ $Product->Price }}</span>
                <br>
                <input type="hidden" name="ProductId" value="{{ $Product->Id }}">
                <input type="hidden" name="ProductName" value="{{ $Product->Name }}">
                <input type="hidden" name="ProductPrice" value="{{ $Product->Price }}">
                <input type="hidden" name="ProductImage" value="{{ $Product->Image }}">
                <input type="hidden" name="ProductDescription" value="{{ $Product->Description }}">
                <input type="hidden" name="ProductDetail" value="{{ $Product->ProductDetail }}">
                <input type="hidden" name="ProductType" value="{{ $Product->ProductType }}">
                <button>BUY NOW</button>
            </div>
        </form>
    @endforeach 
    @foreach($Bags as $Product)
        <form action="/PurchaseNow/{{ ucwords($Product->ProductType) }}/{{ $Product->Id }}">
            <div class="product">
                <p class="description">{{ $Product->Description }}</p>
                <h1>SALE</h1>
                <div style="background-image: url('images/bags/{{ $Product->Image }}')"></div>
                <p>{{ $Product->Name }}</p>
                <span>₦{{ $Product->Price }}</span>
                <br>
                <input type="hidden" name="ProductId" value="{{ $Product->Id }}">
                <input type="hidden" name="ProductName" value="{{ $Product->Name }}">
                <input type="hidden" name="ProductPrice" value="{{ $Product->Price }}">
                <input type="hidden" name="ProductImage" value="{{ $Product->Image }}">
                <input type="hidden" name="ProductDescription" value="{{ $Product->Description }}">
                <input type="hidden" name="ProductDetail" value="{{ $Product->ProductDetail }}">
                <input type="hidden" name="ProductType" value="{{ $Product->ProductType }}">
                <button>BUY NOW</button>
            </div>
        </form>
    @endforeach 
    @foreach($Singlets as $Product)
        <form action="/PurchaseNow/{{ ucwords($Product->ProductType) }}/{{ $Product->Id }}">
            <div class="product">
                <p class="description">{{ $Product->Description }}</p>
                <h1>SALE</h1>
                <div style="background-image: url('images/singlets/{{ $Product->Image }}')"></div>
                <p>{{ $Product->Name }}</p>
                <span>₦{{ $Product->Price }}</span>
                <br>
                <input type="hidden" name="ProductId" value="{{ $Product->Id }}">
                <input type="hidden" name="ProductName" value="{{ $Product->Name }}">
                <input type="hidden" name="ProductPrice" value="{{ $Product->Price }}">
                <input type="hidden" name="ProductImage" value="{{ $Product->Image }}">
                <input type="hidden" name="ProductDescription" value="{{ $Product->Description }}">
                <input type="hidden" name="ProductDetail" value="{{ $Product->ProductDetail }}">
                <input type="hidden" name="ProductType" value="{{ $Product->ProductType }}">
                <button>BUY NOW</button>
            </div>
        </form>
    @endforeach 
    @foreach($Boxers as $Product)
        <form action="/PurchaseNow/{{ ucwords($Product->ProductType) }}/{{ $Product->Id }}">
            <div class="product">
                <p class="description">{{ $Product->Description }}</p>
                <h1>SALE</h1>
                <div style="background-image: url('images/boxers/{{ $Product->Image }}')"></div>
                <p>{{ $Product->Name }}</p>
                <span>₦{{ $Product->Price }}</span>
                <br>
                <input type="hidden" name="ProductId" value="{{ $Product->Id }}">
                <input type="hidden" name="ProductName" value="{{ $Product->Name }}">
                <input type="hidden" name="ProductPrice" value="{{ $Product->Price }}">
                <input type="hidden" name="ProductImage" value="{{ $Product->Image }}">
                <input type="hidden" name="ProductDescription" value="{{ $Product->Description }}">
                <input type="hidden" name="ProductDetail" value="{{ $Product->ProductDetail }}">
                <input type="hidden" name="ProductType" value="{{ $Product->ProductType }}">
                <button>BUY NOW</button>
            </div>
        </form>
    @endforeach 
@endsection