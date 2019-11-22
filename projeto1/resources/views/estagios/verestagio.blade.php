@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Estagio</div>
    
                    <div class="card-body">
                       
                            <div class="form-group row">
                                <div for="Periodo" class="fundo col-md-2 col-form-label text-md-right">{{ __('Periodo') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagio->Periodo }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div for="Area_atua" class="fundo col-md-2 col-form-label text-md-right">{{ __('Area de Atuação') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagio->Area_atua }}
                                    </div>
                                </div>
                                </div>
                            
                            <div class="form-group row">
                                <div for="Data_Inicio" class="fundo col-md-2 col-form-label text-md-right">{{ __('Data Do Inicio') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagio->Data_Inicio }}
                                    </div>
                                </div>
                                </div>
                            
                            <div class="form-group row">
                                <div for="Data_Termino" class="fundo col-md-2 col-form-label text-md-right">{{ __('Data Do Termino') }}</div>
                                <div class="col-md-6">
                                <div class="  col-md-19 col-form-label fundo"  >        
                                        {{ $estagio->Data_Termino }}
                                    </div>
                                </div>
                                </div>
                            

                            <?php $pe=0;$ee=0;$epe=0;?>

                            <div class="form-group row">
                                <div for="Id_Coordenador" class="fundo col-md-2 col-form-label text-md-right">{{ __('Coordenador') }}</div>
                                <div class="col-md-6">
                                @foreach($professores as $prf)    
                                   @if( $prf->id == $estagio->Id_Coordenador )  
                                  <?php $pe=1; ?> 
                                <div class="  col-md-19 col-form-label fundo">{{ $prf->Nome }}</div>  
                                
                                @endif
                                @endforeach

                                @if((($professores)=='[]')or($pe!=1))
                                <div class="  col-md-19 col-form-label fundo">Coordenador Não Encontrado</div>
                                @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div for="Id_Estagiario" class="fundo col-md-2 col-form-label text-md-right">{{ __('Estagiario') }}</div>
                                <div class="col-md-6">
                                    @foreach($estagiarios as $stg)    
                                 @if( $stg->id == $estagio->Id_Estagiario ) 
                                 <?php $ee=1; ?> 
                                <div class="  col-md-19 col-form-label fundo">{{ $stg->Nome }}</div> 
                                
                                @endif
                                @endforeach

                                @if((($estagiarios)=='[]')or($ee!=1))
                                <div class="  col-md-19 col-form-label fundo">Estagiario Não Encontrado</div>
                                @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div for="Id_Empresa" class="fundo col-md-2 col-form-label text-md-right">{{ __('Empresa') }}</div>
                                <div class="col-md-6">
                                @foreach($empresas as $emp)    
                                   @if( $emp->id == $estagio->Id_Empresa ) 
                                   <?php $epe=1; ?> 
                                <div class="  col-md-19 col-form-label fundo">{{ $emp->Nome_Fantasia }}</div> 
                               
                                @endif
                                @endforeach

                                @if((($empresas)=='[]')or($epe !=1))
                                <div class="  col-md-19 col-form-label fundo">Empresa Não Encontrada</div>
                                @endif
                                </div>
                                </div>
                                <div style="text-align:left;" >
                            <a style="font-size: 22px;" href="{{ route('estagios.index') }}" class="btn btn-sm btn-info">
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