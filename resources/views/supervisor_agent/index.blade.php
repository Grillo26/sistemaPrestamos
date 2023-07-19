@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Agentes Disponibles</h4>
                            <table class="table supervisor-agent-table">
                                <thead>
                                <tr class="visible-lg">
                                    <th>Nombre</th>
                                    <th>Cartera</th>
                                    <th>Pais</th>
                                    <th>Ciudad</th>
                                    <th>Monto</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td><span class="value">{{$client->name}} {{$client->last_name}}</span></td>
                                        <td><span class="value">{{$client->wallet_name}}</span></td>
                                        <td><span class="value">{{$client->country}}</span></td>
                                        <td><span class="value">{{$client->address}}</span></td>
                                        <td><span class="value">{{$client->base_total}}</span></td>
                                        <td>
                                            <a href="{{url('supervisor/agent')}}/{{$client->id}}/edit" class="btn btn-success btn-xs">Añadir Monto</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody></table>
                        </div><!-- .widget -->

                    </div>
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
