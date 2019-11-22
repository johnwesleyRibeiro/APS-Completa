

@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Estagios</div>
                <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="{{ route('estagios.create') }}" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Novo Estagio
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Periodo</th>
                                <th>Area De Atuação</th>
                                <th>Data Do Inicio</th>
                                <th>Data Do Termino</th>
                                <th>Coordenador</th>
                                <th>Estagiario</th>
                                <th>Empresa</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        
                            @foreach($estagios as $est)
                            <?php 
                            $pe=0;
                            $ee=0;
                            $epe=0; 
                            ?>
                            <tr>
                                <td>{{ $est->id }}</td>    
                                <td>{{ $est->Periodo }}</td>    
                                <td>{{ $est->Area_atua }}</td>    
                                <td>{{ $est->Data_Inicio }}</td>
                                <td>{{ $est->Data_Termino }}</td>
                                
                                @foreach($professores as $prf)    
                                   @if( $prf->id == $est->Id_Coordenador )  
                                  <?php $pe=1; ?> 
                                <td>{{ $prf->Nome }}</td>  
                                
                                @endif
                                @endforeach

                                @if((($professores)=='[]')or($pe!=1))
                                <td>Coordenador Não Encontrado</td>
                                @endif

                                @foreach($estagiarios as $stg)    
                                 @if( $stg->id == $est->Id_Estagiario ) 
                                 <?php $ee=1; ?> 
                                <td>{{ $stg->Nome }}</td> 
                                
                                @endif
                                @endforeach

                                @if((($estagiarios)=='[]')or($ee!=1))
                                <td>Estagiario Não Encontrado</td>
                                @endif

                                @foreach($empresas as $emp)    
                                   @if( $emp->id == $est->Id_Empresa ) 
                                   <?php $epe=1; ?> 
                                <td>{{ $emp->Nome_Fantasia }}</td> 
                               
                                @endif
                                @endforeach

                                @if((($empresas)=='[]')or($epe !=1))
                                <td>Empresa Não Encontrada</td>
                                @endif
                                <td>
                                <a style="background-color: greenyellow;" href="{{ route('estagios.verestagio', $est->id) }}"class="btn btn-sm btn-info"> <i class="material-icons" >search</i></a>
                                    <a href="{{ route('estagios.edit', $est->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i></a>
                                    
                                    <form method="POST" action="{{ route('estagios.destroy', $est->id) }}"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>    
                            @endforeach
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
    
@endsection