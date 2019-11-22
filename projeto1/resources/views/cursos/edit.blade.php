@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Curso</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('cursos.update', $curso->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="Nome" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="Nome" type="text" class="form-control" name="Nome" value="{{ $curso->Nome }}" required>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="Id_Professor" class="col-md-2 col-form-label text-md-right">{{ __('Professor Responsavel') }}</label>
                                <div class="col-md-6">
                                    <select id="Id_Professor" type="text" class="form-control" 
                                    name="Id_Professor"  required>
                                    @foreach($professores as $prf)    

                                    @if( $prf->id == $curso->Id_Professor )  

                                    <option value="{{ $prf->id }}" selected>{{ $prf->Nome }}</option>
                                @else
                                <option value="{{ $prf->id }}">{{ $prf->Nome }}</option>
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