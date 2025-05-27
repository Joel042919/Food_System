@extends('mainDashboard')


@section('styles')
    <link rel="stylesheet" href="{{asset('css/pedidosCocina.css')}}">
@endsection

@section('contenido')
    <section class="pedidosCocina">
        @foreach($pedidos as $pedido)
            <article class="orderCocina" data-idpedido="{{$pedido->idPedido}}">
                <h2>Pedido Mesa {{$pedido->idMesa}}</h2>
                <table class="pedidosTabla">
                    <thead>
                        <th>Platillo</th>
                        <th>Cantidad</th>
                    </thead>
                    <tbody>
                        @foreach($pedido->detallePedido as $detallePedido)
                            <tr>
                                <td>{{$detallePedido->Dishes->dishName}}</td>
                                <td>{{$detallePedido->quantity}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($pedido->details)
                    <p class="detallesCocina"> 
                        <strong>Detalles:</strong> {{$pedido->details}}
                    </p>
                @endif
                
                <div class="controlsPedido">
                    <button class="preparaPedido">En preparación</button>
                    <button class="terminoPedido">Terminado</button>
                </div>
            </article>    
        @endforeach
    </section>

@endsection


@push('scripts')
    <script src="{{asset('js/pedidosCocina.js')}}"></script>
@endpush

