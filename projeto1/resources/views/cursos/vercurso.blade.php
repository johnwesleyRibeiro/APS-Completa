@extends('layouts.app')

@section('content')





</style>
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Curso</div>
    
                    <div class="card-body ">
                            <div class="form-group row">
                                <div for="Nome" class=" col-md-2 col-form-label text-md-right fundo">{{ __('Nome') }}</div>
                                <div class="col-md-6">
                                    <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $curso->Nome }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div for="Id_Professor"   class=" col-md-2 col-form-label text-md-right fundo">{{ __('Professor Responsavel') }}</div>
                                <div class="col-md-6">
                                <?php $pe=0;?>
                                @foreach($professores as $prf)    
                                   @if( $prf->id == $curso->Id_Professor )  
                                   <?php $pe=1;?>
                                <div class=" col-md-19 col-form-label fundo"  >{{ $prf->Nome }}</div>  
                             @endif
                                @endforeach 
                                @if((($professores)=='[]')or($pe!=1))
                                <div class=" col-md-19 col-form-label fundo"  >Professor Responsavel Não Encontrado</div>
                                @endif
                                </div>
                            </div><br><br>
                            <div style="text-align:left;" >
                            <a style="font-size: 22px;" href="{{ route('cursos.index') }}" class="btn btn-sm btn-info">
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