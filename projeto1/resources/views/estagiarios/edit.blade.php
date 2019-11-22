@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Estagiarios</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('estagiarios.update', $estagiario->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="Nome" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="Nome" type="text" class="form-control" name="Nome" value="{{ $estagiario->Nome }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Ra" class="col-md-2 col-form-label text-md-right">{{ __('Ra') }}</label>
                                <div class="col-md-6">
                                    <input id="Ra" type="text" class="form-control" name="Ra" value="{{ $estagiario->Ra }}" required>
                                </div>
                                </div>
                            <div class="form-group row">
                                <label for="Periodo" class="col-md-2 col-form-label text-md-right">{{ __('Periodo') }}</label>
                                <div class="col-md-6">
                                    <input id="Periodo" type="text" class="form-control" name="Periodo" value="{{ $estagiario->Periodo }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Telefone" class="col-md-2 col-form-label text-md-right">{{ __('Telefone') }}</label>
                                <div class="col-md-6">
                                    <input id="Telefone" type="text" class="form-control" name="Telefone" value="{{ $estagiario->Telefone }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="col-md-2 col-form-label text-md-right">{{ __('E-mail') }}</label>
                                <div class="col-md-6">
                                    <input id="Email" type="email" class="form-control" name="Email" value="{{ $estagiario->Email }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Id_Curso" class="col-md-2 col-form-label text-md-right">{{ __('Curso') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Curso" type="text" class="form-control" name="Id_Curso" value="{{ $estagiario->Id_Curso }}" required>
                                    @foreach($cursos as $crs)    

                                    @if( $crs->id == $estagiario->Id_Curso )  

                                    <option value="{{ $crs->id }}" selected>{{ $crs->Nome }}</option>
                                    @else
                                    <option value="{{ $crs->id }}">{{ $crs->Nome }}</option>
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