@extends('layouts.app')


@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Estagiarios</div>
                <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="{{ route('estagiarios.create') }}" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Novo Estagiario
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Registro Academico</th>
                                <th>Periodo</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Curso</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                            @foreach($estagiarios as $stg)
                            <?php $ce=0;?>
                            <tr>
                                <td>{{ $stg->id }}</td>    
                                <td>{{ $stg->Nome }}</td>    
                                <td>{{ $stg->Ra }}</td>    
                                <td>{{ $stg->Periodo }}</td>    
                                <td>{{ $stg->Telefone }}</td>
                                <td>{{ $stg->Email }}</td>

                                @foreach($cursos as $crs)    
                                @if( $crs->id == $stg->Id_Curso ) 
                                <?php $ce=1;?> 
                                <td>{{ $crs->Nome }}</td>
                                    @endif
                                @endforeach

                                @if((($cursos)=='[]')or($ce!=1))
                                <td>Curso Não Encontrado</td>
                                @endif 
                                <td>
                                <a style="background-color: greenyellow;" href="{{ route('estagiarios.verestagiario', $stg->id) }}"class="btn btn-sm btn-info"> <i class="material-icons" >search</i></a>
                                    <a href="{{ route('estagiarios.edit', $stg->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i></a>
                                    
                                    <form method="POST" action="{{ route('estagiarios.destroy', $stg->id) }}"><br>
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