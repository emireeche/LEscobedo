@extends('layouts.app')

@section('template_title')
    {{ $rodada->name ?? "{{ __('Show') Rodada" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rodada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rodadas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $rodada->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
