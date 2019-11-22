@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Professor</div>
    
                    <div class="card-body">
                            <div class="form-group row">
                                <label for="Nome" class="fundo col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $professor->Nome }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Telefone" class="fundo col-md-2 col-form-label text-md-right">{{ __('Telefone') }}</label>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $professor->Telefone }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="fundo col-md-2 col-form-label text-md-right">{{ __('E-mail') }}</label>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $professor->Email }}
                                    </div>
                                </div>
                            </div>
                            <div style="text-align:left;" >
                            <a style="font-size: 22px;" href="{{ route('professores.index') }}" class="btn btn-sm btn-info">
                            <i class="material-icons">arrow_back</i>
                             Voltar
                            </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection