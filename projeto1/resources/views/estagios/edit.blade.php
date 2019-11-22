@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Estagios</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('estagios.update', $estagio->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="Periodo" class="col-md-2 col-form-label text-md-right">{{ __('Periodo') }}</label>
                                <div class="col-md-6">
                                    <input id="Periodo" type="number" class="form-control" name="Periodo" value="{{ $estagio->Periodo }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Area_atua" class="col-md-2 col-form-label text-md-right">{{ __('Area de Atuação') }}</label>
                                <div class="col-md-6">
                                    <input id="Area_atua" type="text" class="form-control" name="Area_atua" value="{{ $estagio->Area_atua }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Data_Inicio" class="col-md-2 col-form-label text-md-right">{{ __('Data Do Inicio') }}</label>
                                <div class="col-md-6">
                                    <input id="Data_Inicio" type="date" class="form-control" name="Data_Inicio" value="{{ $estagio->Data_Inicio }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Data_Termino" class="col-md-2 col-form-label text-md-right">{{ __('Data Do Termino') }}</label>
                                <div class="col-md-6">
                                    <input id="Data_Termino" type="date" class="form-control" name="Data_Termino" value="{{ $estagio->Data_Termino }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Id_Coordenador" class="col-md-2 col-form-label text-md-right">{{ __('Coordenador') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Coordenador" type="text" class="form-control" name="Id_Coordenador" value="{{ $estagio->Id_Coordenador }}" required>
                                    @foreach($professores as $prf)    

                                    @if( $prf->id == $estagio->Id_Coordenador )  

                                    <option value="{{ $prf->id }}" selected>{{ $prf->Nome }}</option>
                                    @else
                                    <option value="{{ $prf->id }}">{{ $prf->Nome }}</option>
                                    @endif

                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Id_Estagiario" class="col-md-2 col-form-label text-md-right">{{ __('Estagiario') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Estagiario" type="text" class="form-control" name="Id_Estagiario" value="{{ $estagio->Id_Estagiario }}" required>
                                    @foreach($estagiarios as $stg)    

                                        @if( $stg->id == $estagio->Id_Estagiario )  

                                        <option value="{{ $stg->id }}" selected>{{ $stg->Nome }}</option>
                                        @else
                                        <option value="{{ $stg->id }}">{{ $stg->Nome }}</option>
                                        @endif

                                        @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Id_Empresa" class="col-md-2 col-form-label text-md-right">{{ __('Empresa') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Empresa" type="text" class="form-control" name="Id_Empresa" value="{{ $estagio->Id_Empresa }}" required>
                                    @foreach($empresas as $emp)    

                                        @if( $emp->id == $estagio->Id_Empresa )  

                                        <option value="{{ $emp->id }}" selected>{{ $emp->Nome_Fantasia }}</option>
                                        @else
                                        <option value="{{ $emp->id }}">{{ $emp->Nome_Fantasia }}</option>
                                        @endif

                                        @endforeach
                                        </select>
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