@extends('mainDashboard')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/tablaPedido.css')}}">
@endsection

@section('contenido')
    <section>
        <h1>Hola</h1>
        <table>
            <thead>
                <th>
                    Pedido ID
                </th>
                <th>
                    Mesa
                </th>
                <th>
                    Fecha Pedido
                </th>
                <th>
                    Empleado ID
                </th>
                <th>
                    Opciones
                </th>
            </thead>
            <tbody class="bodyTabla">

                @foreach($pedidos as $pedido)
                    <tr>
                        <td data-label="Pedido ID">{{$pedido->idPedido}}</td>
                        <td data-label="Mesa">{{$pedido->mesa->mesa}}</td>
                        <td data-label="Fecha Pedido">{{$pedido->fechaPedido}}</td>
                        <td data-label="Empleado ID">{{$pedido->idEmployee}}</td>
                        <td data-label="Opciones">
                            <button class="verDetallePago" data-idPedido="{{$pedido->idPedido}}">Pagar</button>
                        </td>
                    </tr>
                @endforeach                                             
                
                
            </tbody>
        </table>
    </section>
    <section class="detallePago">
        


    </section>
    
@endsection
    
@push('scripts')

    <script src="{{asset('js/detallePedido.js')}}"></script>
@endpush