@extends('mainDashboard')

@section('styles')
    <style>
        .container{
            grid-template-columns: 100%;
        }

        .cardsHistory{
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(10em, 1fr));
            gap: 1em;
        }

        .cardHistory{
            border:1px solid black;
        }

        .hidde{
            display: none;
        }
    </style>
@endsection

@section('contenido')
    <section class="resumenes">
        <span>Total vendido dinero: </span>
        <span>Total platos vendidos segun idplato y status activo</span>

    </section>
    <section class="cardsHistory">
        
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <h1>ID: ABCD124</h1>
            <span>idMesa: 22</span>
            <span>2025-04-30</span>
            <span>Joel Rodriguez Muñoz</span>

            <span>Detalle Pedido</span>
            <span>Arroz con pollo</span>
            <span>23</span>
            <span>2</span>

            <span>Total: s/ 46</span>
        </div>
        <div class="cardHistory">
            <div class="encabezado">
                <h1>ID: ABCD124</h1>
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


@section('scripts')
    <script src="{{asset('js/crearOrderHistory.js')}}"></script>
@endsection