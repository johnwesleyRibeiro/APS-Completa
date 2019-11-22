@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Estagiario</div>
    
                    <div class="card-body">
                        
                            <div class="form-group row">
                                <div for="Nome" class="fundo col-md-2 col-form-label text-md-right">{{ __('Nome') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagiario->Nome }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div for="Ra" class="fundo col-md-2 col-form-label text-md-right">{{ __('Ra') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagiario->Ra }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div for="Periodo" class="fundo col-md-2 col-form-label text-md-right">{{ __('Periodo') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagiario->Periodo }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div for="Telefone" class="fundo col-md-2 col-form-label text-md-right">{{ __('Telefone') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagiario->Telefone }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div for="Email" class="fundo col-md-2 col-form-label text-md-right">{{ __('E-mail') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagiario->Email }}
                                    </div>
                                </div>
                            </div>
                            <?php $es=0;?> 
                            <div class="form-group row">
                                <div for="Id_Curso" class="fundo col-md-2 col-form-label text-md-right">{{ __('Curso') }}</div>
                                <div class="col-md-6">
                                    <div class="col-md-19 col-form-label fundo">
                                   
                                    @foreach($cursos as $crs)    
                                @if( $crs->id == $estagiario->Id_Curso ) 
                                <?php $es=1;?> 
                                <div class="fundo">{{ $crs->Nome }}</div>
                                    @endif
                                @endforeach

                                @if((($cursos)=='[]')or($es!=1))
                                <div class="fundo">Curso Não Encontrado</div>
                                @endif 
                                    </div>
                                </div>
                            </div>
                            <div style="text-align:left;" >
                            <a style="font-size: 22px;" href="{{ route('estagiarios.index') }}" class="btn btn-sm btn-info">
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