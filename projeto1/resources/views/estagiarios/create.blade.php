@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Estagiarios</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('estagiarios.store') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="Nome" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="Nome" type="text" class="form-control" name="Nome" value="{{ old('Nome') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Ra" class="col-md-2 col-form-label text-md-right">{{ __('Ra') }}</label>
                                <div class="col-md-6">
                                    <input id="Ra" type="number" class="form-control"  name="Ra" value="{{ old('Ra') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Periodo" class="col-md-2 col-form-label text-md-right">{{ __('Periodo') }}</label>
                                <div class="col-md-6">
                                    <input id="Periodo" type="number" class="form-control"  name="Periodo" value="{{ old('Periodo') }}" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="Telefone" class="col-md-2 col-form-label text-md-right">{{ __('Telefone') }}</label>
                                <div class="col-md-6">
                                    <input id="Telefone" type="text" class="form-control" name="Telefone" value="{{ old('Telefone') }}" required>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="Email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="Email" type="email" class="form-control" name="Email" value="{{ old('Email') }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Id_Curso" class="col-md-2 col-form-label text-md-right">{{ __('Curso') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Curso" type="text" class="form-control" name="Id_Curso" value="{{ old('Id_Curso') }}" required>

                                    @foreach($cursos as $crs)
                                    <option value="{{ $crs->id }}">{{ $crs->Nome }}</option>
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
    @include('layouts._rod')
@endsection
