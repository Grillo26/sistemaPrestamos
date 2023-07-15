@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Detalles Clientes y Ventas</h4>
                            <table class="table client-table">
                                <thead>
                                <tr class="visible-lg">
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Barrio</th>
                                    <th>Total Prestamos</th>
                                    <th>Pagados</th>
                                    <th>Vigentes</th>
                                    <th>Monto Prestado</th>
                                    <th>Monto Restante</th>
                                    <th>Tipo</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                
                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{$client->name}}</td>
                                        <td>{{$client->last_name}}</td>
                                        <td>{{$client->province}}</td>
                                        <td>{{$client->credit_count}}</td>
                                        <td>{{$client->closed}}</td>
                                        <td>{{$client->inprogress}}</td>
                                        <td>{{isset($client->amount_net) ? $client->amount_net->amount_neto +$client->gap_credit : 0}}</td>
                                        <td>{{$client->summary_net + $client->gap_credit}}</td>
                                        <td>
                                            @if($client->status=='good')
                                                <span class="badge-info badge">BUENO</span>
                                            @elseif($client->status=='bad')
                                                <span class="badge-danger badge">MALO</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{url('client/create')}}?id={{$client->id}}" class="btn btn-success btn-xs">Añadir Prestamo</a>
                                            <a href="{{url('client')}}/{{$client->id}}" class="btn btn-info btn-xs"> Ver Datos</a>
                                            @if(isset($client->lat) && isset($client->lng))
                                                <a href="http://www.google.com/maps/place/{{$client->lat}},{{$client->lng}}" target="_blank" class="btn btn-info btn-xs">Ver Mapa</a>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
