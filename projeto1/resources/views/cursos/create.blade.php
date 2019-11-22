@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cursos</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('cursos.store') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="Nome" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="Nome" type="text" class="form-control" name="Nome" value="{{ old('Nome') }}" required>
                                </div>
                            </div>
    
     



                            <div class="form-group row">
                                <label for="Id_Professor" class="col-md-2 col-form-label text-md-right">{{ __('Professor Responsavel') }}</label>
                                <div class="col-md-6">

                                    <select id="Id_Professor" type="text" class="form-control" 
                                    name="Id_Professor" value="{{ old('Id_Professor') }}" required>
                                                @foreach($professores as $prf)
                                                <option value="{{ $prf->id }}">{{ $prf->Nome }}</option>
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
 
@endsection