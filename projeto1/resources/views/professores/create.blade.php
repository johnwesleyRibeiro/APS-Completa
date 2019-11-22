@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Professores</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('professores.store') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="Nome" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="Nome" type="text" class="form-control" name="Nome" value="{{ old('Nome') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Telefone" class="col-md-2 col-form-label text-md-right">{{ __('Telefone') }}</label>
                                <div class="col-md-6">
                                    <input id="Telefone" type="number" class="form-control"  name="Telefone" value="{{ old('Telefone') }}" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="Email" class="col-md-2 col-form-label text-md-right">{{ __('E-mail') }}</label>
                                <div class="col-md-6">
                                    <input id="Email" type="email" class="form-control" name="Email" value="{{ old('Email') }}" required>
                                </div> 
                            </div>
                         
                    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection