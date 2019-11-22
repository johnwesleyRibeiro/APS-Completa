@extends('layouts.app')


@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Cursos</div>
                <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="{{ route('cursos.create') }}" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Novo Curso
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Professor Responsavel</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            @foreach($cursos as $crs) 
                            <?php $pe=0;?>
                            <tr>
                                <td>{{ $crs->id }}</td>    
                                <td>{{ $crs->Nome }}</td>  

                                 @foreach($professores as $prf)    
                                   @if( $prf->id == $crs->Id_Professor )  
                                   <?php $pe=1;?>
                                <td>{{ $prf->Nome }}</td>  
                             @endif
                                @endforeach 
                                @if((($professores)=='[]')or($pe!=1))
                                <td>Coordenador Não Encontrado</td>
                                @endif
                                <td>
                                <a style="background-color: greenyellow;" href="{{ route('cursos.vercurso', $crs->id) }}"class="btn btn-sm btn-info"> <i class="material-icons" >search</i></a>
                                    <a href="{{ route('cursos.edit', $crs->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i></a>
                                    
                                    <form  method="POST" action="{{ route('cursos.destroy', $crs->id) }}"><br>
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