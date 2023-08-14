@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class=" p-lg text-right">
                            <a type="button" href="{{url('client')}}" class="btn btn-inverse"><i class="fa fa-users"></i> Mostar clientes</a>
                            <a type="button" href="{{url('route')}}" class="btn btn-deepOrange"><i class="fa fa-car"></i> Continuar ruta</a>
                        </div><!-- .widget -->
                    </div>
                    @if(app('request')->input('show')=='last')
                        <div class="col-md-12 col-sm-12">
                            <div class="widget stats-widget">
                                <div class="widget-body clearfix">
                                    <div class="pull-left">
                                        <small class="text-color">Pago realizado</small>
                                        <h3 class="widget-title text-success">{{$last['recent']}}</h3>
                                        <small class="text-color">Saldo</small>
                                        <h3 class="widget-title text-primary">{{$last['rest']}}</h3>
                                    </div>
                                    <span class="pull-right big-icon watermark"><i class="fa fa-money"></i></span>
                                </div>
                                
                                
                            </div>
                        </div>
                    @endif

                    <div class="col-md-12 col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">{{$user->name}} {{$user->last_name}}</h4>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">Credito: <span class="text-purple">{{$credit_data->id}}</span></li>
                                <li class="list-group-item">Fecha de venta: <span class="text-purple">{{$credit_data->created_at}}</span></li>
                                <li class="list-group-item">Tasa de interés: <span class="text-purple">{{$credit_data->utility}}%</span></li>
                                <li class="list-group-item">Cuotas pactadas: <span class="text-purple">{{$credit_data->payment_number}}</span></li>
                                <li class="list-group-item">Monto por cuota: <span class="text-purple">{{$credit_data->payment_amount}}</span></li>
                                <li class="list-group-item">Capital: <span class="text-purple">{{$credit_data->amount_neto}}</span></li>
                                <li class="list-group-item">Intereses: <span class="text-purple">{{$credit_data->utility_amount}}</span></li>
                                <li class="list-group-item">Total: <span class="text-purple">{{$credit_data->total}}</span></li>

                            </ul>
                        </div>
                    </div>

                    

                    

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <!--###################### CAJA DE CHECKBOX ##############################-->
                            <style>
                                    .checkbox-grid {
                                        display: grid;
                                        grid-template-columns: repeat(5, 1fr);
                                        grid-gap: 30px;
                                    }

                                    
                                    .checkbox-grid input[type="checkbox"] {
                                        transform: scale(2.5);
                                     
                                        
                                    }
                                </style>
                                @foreach($clients as $client)

                                @php
                                $lastNumber = substr($client->number_index, -1);
                                @endphp
                                @endforeach
                                <div class="widget-body clearfix">
                                    <div class="checkbox-grid">
                                        @for ($i = 1; $i <= 24; $i++)
                                                @if ($i <= $lastNumber)
                                            
                                                    <input type="checkbox" checked disabled>
                                            
                                                @else
                                                
                                                    <input type="checkbox" disabled>
                                                
                                                @endif
                                        @endfor
                              
                                    </div>
                                </div>

                                <!--#########################################################################-->
                        </div>
                    </div>  
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Historial</h4>
                            <table class="table agente-paymentsH-table">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>No</th>
                                    <th>Monto Pgagado</th>
                                    <th>Saldo</th>
                                    <th></th>
                                </tr>
                            </thead>
                                <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{$client->created_at}}</td>
                                        <td>{{$client->number_index}}</td>
                                        <td>{{$client->amount}}</td>
                                        <td>{{$client->rest}}</td>
                                        
                                    </tr>
                                @endforeach

                                </tbody></table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <h4 class="m-b-lg">Código Últimos Créditos</h4>
                            @foreach($other_credit as $c)
                                @if((app('request')->input('id_credit'))!=$c->id)
                                    <a href="{{url('summary')}}/?id_credit={{$c->id}}" class="btn btn-info">{{$c->id}}</a>
                                @endif
                            @endforeach
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
