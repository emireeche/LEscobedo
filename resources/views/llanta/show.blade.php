@extends('layouts.app')

@section('template_title')
    {{ $llanta->name ?? "{{ __('Show') Llanta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Llanta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('llantas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $llanta->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $llanta->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $llanta->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $llanta->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Id:</strong>
                            {{ $llanta->vehiculo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Marca Id:</strong>
                            {{ $llanta->marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rodada Id:</strong>
                            {{ $llanta->rodada_id }}
                        </div>
                        <div class="form-group">
                            <strong>Medida Id:</strong>
                            {{ $llanta->medida_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
