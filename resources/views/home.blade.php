@extends('layouts.app')

@section('admin-section')
    <div class="col-md-3 col-sm-6">
        <a href="{{url('admin/user/create')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-success">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Crear usuario</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i
                                class="fa fa-user-plus"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('admin/route/create')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-purple">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Crear cartera</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i
                                class="fa fa-map-marker"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('admin/user')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-deepOrange">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Listar usuarios</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-list-ol"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
@endsection

@section('agent-section')
    <div class="col-md-3 col-sm-6">
        <a href="{{url('client/create')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-warning">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Cliente nuevo</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-user"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>

    <div class="col-md-3 col-sm-6">
        <a href="{{url('client')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-primary">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Mostrar clientes</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-th-list"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('simulator')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-purple">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Simulador</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i
                                class="fa fa-calculator"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('payment')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-success">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Registrar pago</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-money"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('route')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-deepOrange">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Iniciar Ruta</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-car"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <!--<div class="col-md-3 col-sm-6 hidden">
        <a href="{{url('history')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-danger">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Historia cierre</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-lock"></i></span>
                </div>
            </div>
        </a>
    </div>-->
    <div class="col-md-3 col-sm-6">
        <a href="{{url('transaction')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-inverse">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Transacciones</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-list-ol"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('bill')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-pink">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Gastos</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i
                                class="fa fa-cart-plus"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>

@endsection

@section('supervisor-section')

    <div class="col-md-3 col-sm-6">
        <a href="{{url('supervisor/agent')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-warning">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Asignar Monto</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-dollar"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('supervisor/close')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-primary">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Cierre de Caja</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-lock"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <!--<div class="col-md-3 col-sm-6">
        <a href="{{url('supervisor/client')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-purple">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Edicion cliente</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-edit"></i></span>
                </div>
            </div><!-- .widget
        </a>

    </div>-->
    <div class="col-md-3 col-sm-6">
        <a href="{{url('supervisor/tracker')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-success">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Rastro agente</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-search"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('supervisor/review/create')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-deepOrange">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Revision cartera</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-eye"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('supervisor/statistics')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-danger">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Estadistica</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i
                                class="fa fa-line-chart"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('supervisor/cash')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-inverse">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Caja</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i class="fa fa-bars"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    <div class="col-md-3 col-sm-6">
        <a href="{{url('supervisor/bill/create')}}">
            <div class="widget stats-widget">
                <div class="widget-body clearfix bg-pink">
                    <div class="pull-left">
                        <h3 class="widget-title text-white">Gastos</h3>
                    </div>
                    <span class="pull-right big-icon watermark"><i
                                class="fa fa-cart-plus"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>

@endsection

@section('agent-resume')
    <div class="col-12 pb-2">
        
    </div>
    <!--###################CAJA ULTIMA LIQUIDADA############################-->
    <div class="col-6 col-sm-6">
        <a href="#">
            <div class="widget stats-widget widget-resume">
                <div class="widget-body h-100 clearfix bg-white">
                    <div class="pull-left">
                        <h2 class="widget-title text-dark">CAJA ULTIMA LIQUIDADA</h2>
                        <h2 class="widget-title text-dark"><b>Bs. {{$valorIngresado}}</b></h2>
                    </div>
                    <span class="pull-right big-icon text-success watermark"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
        <!--##################CAJA ACTUAL############################-->
    <div class="col-6 col-sm-6">
        <a href="#">
            <div class="widget stats-widget widget-resume">
                <div class="widget-body clearfix h-100 bg-white">
                    <div class="pull-left">
                        <h2 class="widget-title text-dark">TOTAL CAJA ACTUAL</h2>
                        <h2 class="widget-title text-dark">
                            <span class="text-success">Bs. {{($base_agent - $total_bill) + $total_summary}}</span>
                        </h2>
                    </div>
                    <span class="pull-right big-icon text-success watermark"><i class="fa fa-arrow-right"></i></span>
                </div>
            
            </div><!-- .widget -->
        </a>
    </div>

     <!--#######################GASTOS##########################-->
     <div class="col-6 col-sm-6">
        <a href="{{url('bill')}}">
            <div class="widget stats-widget widget-resume">
                <div class="widget-body h-100 clearfix bg-white">
                    <div class="pull-left">
                        <h2 class="widget-title text-dark">TOTAL GASTOS</h2>
                        <h2 class="widget-title text-dark"><b>Bs. {{$total_bill}}</b></h2>
                    </div>
                    <span class="pull-right big-icon text-danger watermark"><i class="fa fa-arrow-down"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>
    
    <!--###################TOTAL VENTAS############################-->
    <div class="col-6 col-sm-6">
        <a href="{{url('transaction')}}">
            <div class="widget stats-widget widget-resume">
                <div class="widget-body h-100 clearfix bg-white">
                    <div class="pull-left">
                        <h2 class="widget-title text-dark">TOTAL VENTAS</h2>
                        <h2 class="widget-title text-dark"><b>Bs. {{$today_sell}}</b></h2>
                    </div>
                    <span class="pull-right big-icon text-success watermark"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>

     <!--###################TOTAL COBRADO DIA############################-->
     <div class="col-6 col-sm-6">
        <a href="{{url('transaction')}}">
            <div class="widget stats-widget widget-resume">
                <div class="widget-body h-100 clearfix bg-white">
                    <div class="pull-left">
                        <h2 class="widget-title text-dark">Total Cobrado</h2>
                        <h2 class="widget-title text-dark"><b>Bs. {{$total_summary}}</b></h2>
                    </div>
                    <span class="pull-right big-icon text-success watermark"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div><!-- .widget -->
        </a>

    </div>


  
    <!--#####################################################-->
    <div class="clearfix"></div>
    <div class="row m-0 d-block col-12 pb-4">
        <hr>
    </div>
@endsection

@section('content')
    <main id="app-main" class="app-main in">
        <div class="close-wrapper"></div>
        <div class="wrap">
            @if(!$close_day)
                <section class="app-content">
                    @if(in_array(Auth::user()->level,['agent']))
                        <div class="row">
                            @yield('agent-resume')
                            @yield('agent-section')
                        </div>

                    @elseif(in_array(Auth::user()->level,['supervisor']))
                        <div class="row">
                            @yield('supervisor-section')
                        </div>
                    @elseif(in_array(Auth::user()->level,['admin']))
                        <div class="row">
                            <div class="col-12 row m-0 p-0">
                                @yield('admin-section')
                                <hr>
                            </div>

                            {{--                        <div class="col-12 row m-0 p-0">--}}
                            {{--                            <div class="d-block col-12">--}}
                            {{--                                <h6 class="font-weight-bold p-1">Agente</h6>--}}
                            {{--                            </div>--}}
                            {{--                            @yield('agent-section')--}}
                            {{--                            <hr>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="col-12 row m-0 p-0">--}}
                            {{--                            <div class="d-block col-12">--}}
                            {{--                                <h6 class="font-weight-bold p-1">Supervisor</h6>--}}
                            {{--                            </div>--}}
                            {{--                            @yield('supervisor-section')--}}
                            {{--                            <hr>--}}

                            {{--                        </div>--}}


                        </div>
                    @else
                        <div>No tienes permisos</div>
                    @endif
                </section>
            @else
                <section class="app-content">
                    <div class="col-12 text-center p-4">
                        <b>Cierre de Caja. Vuelve mañana</b>
                    </div>
                </section>
            @endif

        </div>

    </main>
@endsection
