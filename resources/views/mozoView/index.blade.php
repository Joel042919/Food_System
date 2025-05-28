@extends('mainDashboard')

@section('contenido')
    <section class="showDishes">
        <div class="offers pedidosListos">
            <img src="{{ asset('img/anuncio.avif') }}" alt="">
        </div>
        <div class="categories">
            @foreach($categories as $category)
                <div class="category" data-id="{{$category->idCategory}}">
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
                        ['img'=>'eggBread.avif','name'=>'Fish Burguer','price'=>'$5.59']
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
                        <img class="imageCard" src="{{  $dish->dishImg }}" alt="" rel="dns-prefetch" >
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
            <span class="padding">Order Menu</span>
            <div class="infOrder">
                <label class="padding" for="numeroMesa">Mesa: </label>
                <select name="numeroMesa" id="numeroMesa">
                    @foreach($mesas as $mesa)
                        <option value="{{$mesa->idMesa}}">{{$mesa->mesa}}</option>
                    @endforeach
                </select>
            </div>
            <div class="infOrder">
                <label class="padding" for="detallePedido">Detalle Pedido: </label>
                <textarea class="detallePedido" name="detallePedido" id="detallePedido" cols="35" rows="4"></textarea>
            </div>
            
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

@push('scripts')
    <script src="{{asset('js/filterByCategory.js')}}" type="module" defer></script>
    <script src="{{asset('js/chargeDishesToCart.js')}}" type="module" defer></script>
    <script src="{{asset('js/sendOrder.js')}}" type="module" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded',function(){

            function pedirPermisoNotificaciones(){
                if(!("Notification" in window)){
                    console.error("Este navegador no soporta notificaciones")
                    return;
                }

                if (Notification.permission === "granted") {
                    console.log("Permiso para notificaciones ya concedido.");
                }else if (Notification.permission !== "denied") {
                    Notification.requestPermission()
                        .then(function (permission) {
                            // Si el usuario lo concede, ¡genial!
                            if (permission === "granted") {
                                console.log("Permiso para notificaciones concedido.");
                            } else {
                                console.warn("Permiso para notificaciones denegado.");
                            }
                    });
                } else {
                    console.warn("El permiso para notificaciones está denegado. El usuario debe cambiarlo en la configuración del navegador.");
                }
            }
            pedirPermisoNotificaciones();

            if(window.Echo){
                console.log("Echo está listo. Conectando al canal Cocina");

                window.Echo.channel('cocina')
                    .listen('.pedido.listo',(data)=>{
                        console.log("Recibido el pedido vv",data)
                        //Esucha en el canal público
                        if (Notification.permission === "granted") {
                            try {
                                new Notification("¡Pedido Listo!", {
                                    body: data.mensaje
                                    //icon: ''
                                });
                            } catch (error) {
                                console.error("Error al mostrar la notificación:", error);
                            }
                        } else {
                            console.log("No se muestra notificación porque el permiso no está concedido.");
                        }
                    })
                console.log("Escucha eventos...")
            }else{
                console.log("Laravel echo no esta configurado o no se ha cargado")
            }
        })
    </script>
@endpush