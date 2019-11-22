@extends('layouts.app')


@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Cursos</div>
                

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $users) 
                            <tr>
                                <td>{{ $users->id }}</td>    
                                <td>{{ $users->name }}</td>  
                                <td>{{ $users->email }}</td>  
                                <td>
                                    <a href="{{ route('users.edit', $users->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i>Editar</a>
                                    
                                    <form  method="POST" action="{{ route('users.destroy', $users->id) }}"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">delete</i>Excluir</button>
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