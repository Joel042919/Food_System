@extends('mainDashboard')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/cardHistoryCajero.css')}}">
@endsection

@section('contenido')
    <section class="resumenes">
        <table>
            <thead>
                <th>Total vendido</th>
            </thead>
            <tbody>
                <tr>
                    <td class="totalMoney"></td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="cardsHistory">
        <div class="cardHistory">
            <div class="encabezado">
                <h3>ID: ABCD324</h3>
                <span>idMesa: 22</span>
            </div>
            <div class="cliente">
                <label for="nombreCliente">Nombre Cliente</label>
                <span id="nombreCliente">Joel Rodriguez Muñoz</span>
                <span>2025-04-30</span>
            </div>
            <span>Total: s/ 46</span>
            <button class="verDetalle" >Ver detalle</button>
            <div class="detallePedido hidde">
                <table>
                    <thead>
                        <th>Plato</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Arroz con pollo</td>
                            <td>23</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Arroz con pollo</td>
                            <td>23</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Arroz con pollo</td>
                            <td>23</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Arroz con pollo</td>
                            <td>23</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Arroz con pollo</td>
                            <td>23</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Arroz con pollo</td>
                            <td>23</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Arroz con pollo</td>
                            <td>23</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </section>
    
@endsection


@push('scripts')
    <script src="{{asset('js/crearOrderHistory.js')}}"></script>
@endpush