@extends('layouts.app')


@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Professores</div>
                <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="{{ route('professores.create') }}" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Novo Professor
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            @foreach($professores as $prf)
                            <tr>
                                <td>{{ $prf->id }}</td>    
                                <td>{{ $prf->Nome }}</td>    
                                <td>{{ $prf->Telefone }}</td>    
                                <td>{{ $prf->Email }}</td>
                                <td>
                                <a style="background-color: greenyellow;" href="{{ route('professores.verprofessor', $prf->id) }}"class="btn btn-sm btn-info"> <i class="material-icons" >search</i></a>
                                    <a href="{{ route('professores.edit', $prf->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i></a>
                                    
                                    <form method="POST" action="{{ route('professores.destroy', $prf->id) }}"><br>
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