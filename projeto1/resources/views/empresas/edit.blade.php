@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Empresas</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('empresas.update', $empresa->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="Nome_Fantasia" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="Nome_Fantasia" type="text" class="form-control" name="Nome_Fantasia" value="{{ $empresa->Nome_Fantasia }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Razao_Social" class="col-md-2 col-form-label text-md-right">{{ __('Razao Social') }}</label>
                                <div class="col-md-6">
                                    <input id="Razao_Social" type="text" class="form-control" name="Razao_Social" value="{{ $empresa->Razao_Social }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Telefone" class="col-md-2 col-form-label text-md-right">{{ __('Telefone') }}</label>
                                <div class="col-md-6">
                                    <input id="Telefone" type="text" class="form-control" name="Telefone" value="{{ $empresa->Telefone }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="col-md-2 col-form-label text-md-right">{{ __('E-mail') }}</label>
                                <div class="col-md-6">
                                    <input id="Email" type="email" class="form-control" name="Email" value="{{ $empresa->Email }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Cidade" class="col-md-2 col-form-label text-md-right">{{ __('Cidade') }}</label>
                                <div class="col-md-6">
                                    <input id="Cidade" type="text" class="form-control" name="Cidade" value="{{ $empresa->Cidade }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Uf" class="col-md-2 col-form-label text-md-right">{{ __('Uf') }}</label>
                                <div class="col-md-6">
                                    <input id="Uf" type="text" class="form-control" name="Uf" value="{{ $empresa->Uf }}" required>
                                </div>
                            </div>
        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection