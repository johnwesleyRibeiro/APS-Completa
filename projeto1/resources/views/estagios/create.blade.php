@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
             <div class="card">
                 <div class="card-header">Estagios</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('estagios.store') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="Periodo" class="col-md-2 col-form-label text-md-right">{{ __('Periodo') }}</label>
                                <div class="col-md-6">
                                    <input id="Periodo" type="number" class="form-control" name="Periodo" value="{{ old('Periodo') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Area_atua" class="col-md-2 col-form-label text-md-right">{{ __('Area de atuação') }}</label>
                                <div class="col-md-6">
                                    <input id="Area_atua" type="text" class="form-control"  name="Area_atua" value="{{ old('Area_atua') }}" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="Data_Inicio" class="col-md-2 col-form-label text-md-right">{{ __('Data De Inicio') }}</label>
                                <div class="col-md-6">
                                    <input id="Data_Inicio" type="date" class="form-control" name="Data_Inicio" value="{{ old('Data_Inicio') }}" required>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="Data_Termino" class="col-md-2 col-form-label text-md-right">{{ __('Data Do Termino') }}</label>
                                <div class="col-md-6">
                                    <input id="Data_Termino" type="date" class="form-control" name="Data_Termino" value="{{ old('Data_Termino') }}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="Id_Coordenador" class="col-md-2 col-form-label text-md-right">{{ __('Coordenador') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Coordenador" type="text" class="form-control" 
                                    name="Id_Coordenador" value="{{ old('Id_Coordenador') }}" required>
                                    
                                    @foreach($professores as $prf)
                                    <option value="{{ $prf->id }}">{{ $prf->Nome }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Id_Estagiario" class="col-md-2 col-form-label text-md-right">{{ __('Estagiario') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Estagiario" type="text" class="form-control" name="Id_Estagiario" value="{{ old('Id_Estagiario') }}" required>

                                    @foreach($estagiarios as $stg)
                                    <option value="{{ $stg->id }}">{{ $stg->Nome }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Id_Empresa" class="col-md-2 col-form-label text-md-right">{{ __('Empresa') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Empresa" type="text" class="form-control" name="Id_Empresa" value="{{ old('Id_Empresa') }}" required>
                                   
                                    @foreach($empresas as $emp)
                                    <option value="{{ $emp->id }}">{{ $emp->Nome_Fantasia }}</option>
                                            @endforeach
                                    </select>
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