@extends('layout.layout')

@section('title', 'JASMINE Sola Boutique')
@section('content')
    <section class="sec-1" style="background-image: url('{{ asset('images/bg.jpg') }}')">
        <div class="sec-1-inner">
            <div>
                <h1>ONLINE STORE</h1> 
                <h2>JASMINE <span>SOLA</span></h2>
                <span>BOUTIQUE</span>
                <center><a href="#ShopNow"><button>SHOP NOW</button></a><a href="#Contact"><button>CONTACT</button></a></center>
                <h3>SAVE UP TO 50%</h3>
                <p>IF YOU BUY UP TO THREE PRODUCTS</p>
                <span class="we-sell">
                    <span>We Sell</span>
                    <span class="typer heading" id="main" data-words="Perfumes, Bags, Wig Oils, Singlets, Boxers, Shoes" data-delay="100" data-deleteDelay="1000"></span>
                    <span class="cursor" data-owner="main"></span>
                </span>
            </div>
        </div>
    </section>

    <div class="new-products-title" id="ShopNow">
        <h1>AVAILABLE PRODUCTS</h1>
        <h2>{{$ProductNameForRoute_2}}</h2>
    </div>
    <div class="new-products">
        @foreach($Bags as $Bag)
            <form action="/PurchaseNow/{{ $ProductNameForRoute_2 }}/{{ $Bag->Id }}">
                <div class="product">
                    <p class="description">{{ $Bag->Description }}</p>
                    <h1>SALE</h1>
                    <div style="background-image: url('/images/bags/{{ $Bag->Image }}')"></div>
                    <p>{{ $Bag->Name }}</p>
                    <span>₦ {{ $Bag->Price }}</span>
                    <br>
                    <button>BUY NOW</button>
                    <input type="hidden" name="ProductId" value="{{ $Bag->Id }}">
                    <input type="hidden" name="ProductName" value="{{ $Bag->Name }}">
                    <input type="hidden" name="ProductPrice" value="{{ $Bag->Price }}">
                    <input type="hidden" name="ProductImage" value="{{ $Bag->Image }}">
                    <input type="hidden" name="ProductDescription" value="{{ $Bag->Description }}">
                    <input type="hidden" name="ProductDetail" value="{{ $Bag->ProductDetail }}">
                </div>
            </form>
        @endforeach
    </div>

    <div class="from-shop-title"> 
        <h2>{{$ProductNameForRoute}}</h2>
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
                </div>
            </form>
        @endforeach 
    </div>

    <section class="sec-2">
        <a href="{{ route('Perfumes') }}">
            <div class="sec-2-inner">
                <div>
                    <img src="{{ asset('images/perfume.png') }}">
                </div>
                <p>PERFUMES</p>
            </div>
        </a>
        <a href="{{ route('Bags') }}">
            <div class="sec-2-inner">
                <div>
                    <img src="{{ asset('images/shopping-bag.png') }}">
                </div>
                <p>BAGS</p>
            </div>
        </a>
        <a href="{{ route('Singlets') }}">
            <div class="sec-2-inner">
                <div>
                    <img src="{{ asset('images/vest.png') }}">
                </div>
                <p>SINGLETS</p>
            </div>
        </a>
        <a href="{{ route('Boxers') }}">
            <div class="sec-2-inner">
                <div>
                    <img src="{{ asset('images/pants.png') }}">
                </div>
                <p>BOXERS</p>
            </div>
        </a>
        <div class="sec-2-inner">
            <div>
                <img src="{{ asset('images/high-heels.png') }}">
            </div>
            <p>SHOES</p>
        </div>
        <div class="sec-2-inner">
            <div>
                <img src="{{ asset('images/hair.png') }}">
            </div>
            <p>HAIR</p>
        </div>
    </section>
    
    <div class="from-shop-title">
        <h1>FROM SHOP</h1>
        <h2>{{$ProductNameForRoute_3}}</h2>
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
                </div>
            </form>
        @endforeach 
    </div>

    <section class="sec-3">
        <div class="sec-3-inner">
            <img src="{{ asset('images/free-shipping.png') }}">
            <h1>DELIVERY</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, vero.</p>
        </div>
        <div class="sec-3-inner">
            <img src="{{ asset('images/cash-back.png') }}">
            <h1>REFUND</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, vero.</p>
        </div>
        <div class="sec-3-inner">
            <img src="{{ asset('images/question.png') }}">
            <h1>NEED HELP ?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, vero.</p>
        </div>
    </section>

    <div class="new-products-title">
        <h1>MORE PRODUCTS FROM OUR STORE</h1>
        <h2>{{$ProductNameForRoute_4}}</h2>
    </div>
    <div class="new-products">
        @foreach($Boxers as $Boxer)
            <form action="/PurchaseNow/{{ $ProductNameForRoute_4 }}/{{ $Boxer->Id }}">
                <div class="product">
                    <p class="description">{{ $Boxer->Description }}</p>
                    <h1>SALE</h1>
                    <div style="background-image: url('/images/boxers/{{ $Boxer->Image }}')"></div>
                    <p>{{ $Boxer->Name }}</p>
                    <span>₦ {{ $Boxer->Price }}</span>
                    <br>
                    <button>BUY NOW</button>
                    <input type="hidden" name="ProductId" value="{{ $Boxer->Id }}">
                    <input type="hidden" name="ProductName" value="{{ $Boxer->Name }}">
                    <input type="hidden" name="ProductPrice" value="{{ $Boxer->Price }}">
                    <input type="hidden" name="ProductImage" value="{{ $Boxer->Image }}">
                    <input type="hidden" name="ProductDescription" value="{{ $Boxer->Description }}">
                    <input type="hidden" name="ProductDetail" value="{{ $Boxer->ProductDetail }}">
                </div>
            </form>
        @endforeach
    </div>

    <section class="sec-4" id="Contact">
        <div class="sec-4-inner">
            <div class="contact">
                <h1>GET IN TOUCH</h1>
                <br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi maxime sunt dignissimos eos, incidunt delectus labore iusto ipsa, aliquid laborum ducimus, voluptatum commodi doloribus quibusdam inventore nesciunt corporis possimus accusantium esse.  <br><br> Delectus ullam iste dolores repellendus perspiciatis esse aliquid assumenda ea, odit officiis quasi blanditiis tenetur. Delectus numquam eligendi temporibus.</p>
                <br>
                <div class="contact-info">
                    <div><img src="{{ asset('images/ws.png') }}">
                    </div>
                    <div>
                        <h1>WHATSAPP</h1>
                        <span>0817 614 1600</span>
                    </div>
                </div>
                <div class="contact-info">
                    <div><img src="{{ asset('images/phone.png') }}">
                    </div>
                    <div>
                        <h1>CALL US AT</h1>
                        <span>0909 262 9101</span>
                    </div>
                </div>
                <div class="contact-info">
                    <div><img src="{{ asset('images/instagram.png') }}">
                    </div>
                    <div>
                        <h1>INSTAGRAM</h1>
                        <span>@jasminesolaboutique</span>
                    </div>
                </div>
                <div class="contact-info">
                    <div><img src="{{ asset('images/facebook.png') }}">
                    </div>
                    <div>
                        <h1>FACEBOOK</h1>
                        <span>Jasmine Sola Boutique</span>
                    </div>
                </div>
                <div class="contact-info">
                    <div><img src="{{ asset('images/location-pin.png') }}">
                    </div>
                    <div>
                        <h1>SHOP LOCATION</h1>
                        <span>23/24 Dockyard, Apapa</span>
                    </div>
                </div>
                <div class="contact-info">
                    <div><img src="{{ asset('images/mail.png') }}">
                    </div>
                    <div>
                        <h1>EMAIL US AT</h1>
                        <span>info@jasminesolaboutique.com <br> <strong>OR</strong> <br> jasminesolaboutique@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="form">
                    <form action="">
                        <h1>BOOK NOW</h1>
                        <input type="text" name="" placeholder="Enter Name"><br>
                        <input type="email" name="" placeholder="Enter Email"><br>
                        <input type="text" name="" placeholder="Name of Product"><br>
                        <textarea name="" placeholder="Enter Your Message"></textarea><br>
                        <button>SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
@endsection