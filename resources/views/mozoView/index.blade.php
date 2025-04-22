@extends('mainDashboard')

@section('contenido')
    <section class="showDishes">
        <div class="offers">
            <img src="{{ asset('img/anuncio.avif') }}" alt="">
        </div>
        <div class="categories">
            @foreach($categories as $category)
                <div class="category">
                    <img src="{{ asset($category->categoryUrl) }}" alt="">
                    <span>{{$category->category}}</span>
                </div>
            @endforeach
        </div>
        <div class="popularDishes">
            <div class="controls">
                <span>Popular</span>
                <button>View All</button>
            </div>
            <div class="containerPopular">
                @php
                    $populars = [
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'],    
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59'], 
                    ]

                @endphp

                @foreach($populars as $popular)
                    <div class="popular">
                        <img class="imageCard" src="{{ asset('img/' . $popular['img']) }}" alt="">
                        <span class="stars">*****</span>
                        <div class="more">
                            <div class="details">
                                <span>{{ $popular['name'] }}</span>
                                <span>{{ $popular['price'] }}</span>
                            </div>
                            <button>+</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="allDishesToday">
            <div class="controls">
                <span>All Dishes</span>
                <button>View All</button>
            </div>
            <div class="containerAll">
                @foreach($dishes as $dish)
                    <div class="dish" data-id="{{$dish->idDishes}}">
                        <img class="imageCard" src="{{ $dish->dishImg }}" loading="lazy"  alt="" >
                        <div class="more">
                            <div class="details">
                                <span>{{ $dish['dishName'] }}</span>
                                <span>{{ $dish['price'] }}</span>
                            </div>
                            <button>+</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="purchase">
        <div class="addressCard">
            <span>Your Address</span>
            <div>
                <img class="addressIcon" src="{{ asset('img/' . 'location.png') }}" alt="">
                <span class="address">Francisco de zela 462 Francisco de zela 462 Francisco de zela 462 Francisco de zela 462</span>
                <button class="changeAddress">Change</button>
            </div>
        </div>
        <div class="orderMenu">
            <span>Order Menu</span>
            <!--<div class="orderItem">
                <img src="{{ asset('img/tacos.webp') }}" alt="">
                <span>Pepperoni Pizza</span>
                <span class="totalPrice">$1</span>
                <div class="addQuantity">
                    <button>-</button>
                    <span class="amount">3</span>
                    <button>+</button>
                </div>
            </div>-->
            <div class="pedidos">
                
            </div>
            <div class="totalOrder">
                <span>Total</span>
                <span class="totalPriceOrder">
                    $0
                </span>
            </div>
            <a class="pay">
                <img src="{{ asset('img/debit-card.png') }}" alt="">
                <span>Let's Order</span>
            </a>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{asset('js/chargeDishesToCart.js')}}" type="module" defer></script>
    <script src="{{asset('js/sendOrder.js')}}" type="module" defer></script>
@endsection