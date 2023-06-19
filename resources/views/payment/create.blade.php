@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <style>
    .custom-checkbox .form-check-input[type="checkbox"] {
      width: 50px;
      height: 30px;
      border: 50px solid #88c64b;
      border-radius: 25px;
      padding:20px;
    }
    .custom-checkbox .form-check-label {
    }
    </style>
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12 col-lg-8 offset-lg-2">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Abono de cuota</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <form method="POST" class="payment-create" action="{{url('summary')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Nombres:</label>
                                        <input type="text" name="name" value ="{{$user->name}} {{$user->last_name}}" readonly class="form-control" id="name">
                                    </div>
                                    <input type="hidden" name="rev" value="{{ app('request')->input('rev') }}">
                                    <div class="form-group">
                                        <label for="address">Número de credito:</label>
                                        <input type="text" name="credit_id" value="{{$id}}" readonly class="form-control" id="address">
                                    </div>
                                    <div class="form-group">
                                        <label for="province">Valor de venta:</label>
                                        <input type="text" name="province" value="{{$amount_neto}} en {{$payment_number}} cuotas" readonly class="form-control" id="province">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Pagado:</label>
                                        <input type="tel" name="phone" value="{{$credit_data['positive']}}" readonly class="form-control" id="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Saldo:</label>
                                        <input type="tel" name="phone" value="{{$credit_data['rest']}}" readonly class="form-control" id="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Valor de cuota:</label>
                                        <input type="text" readonly value="{{$credit_data['payment_quote']}}" class="form-control" id="amount1">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Cuotas pagadas:</label>
                                        <input type="text" readonly value="{{$credit_data['payment_done']}}" class="form-control" id="amount2">
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Valor de abono:</label>
                                        <input type="number" step="any" min="1" max="{{$credit_data['rest']}}" value="{{$credit_data['payment_quote']}}" name="amount" class="form-control" id="amount">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" {{($credit_data['rest']<1) ? 'disabled': ''}} class="btn btn-success btn-block btn-md">Guardar pago</button>
                                    </div>


                                    <div class="container">
                                        <div class="row checkbox-grid">
                                            <div class="col-3 col-sm-3 col-md-2">
                                                <div class="custom-checkbox">
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">w</label>
                                                    </div>
                                                </div>
                                            </div>
                                                    
                                            
                                        </div>
                                        
                                            <!-- Repite las columnas para las demás casillas de verificación -->
                                    </div>

                                </form>
                               
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
