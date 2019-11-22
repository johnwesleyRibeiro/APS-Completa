@extends('layouts.app')


@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Empresas</div>
                <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="{{ route('empresas.create') }}" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Nova Empresa
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Nome Fantasia</th>
                                <th>Razão Social</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Cidade</th>
                                <th>Uf</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            @foreach($empresas as $emp)
                            <tr>
                                <td>{{ $emp->id }}</td>    
                                <td>{{ $emp->Nome_Fantasia }}</td>    
                                <td>{{ $emp->Razao_Social }}</td>    
                                <td>{{ $emp->Telefone }}</td>
                                <td>{{ $emp->Email }}</td>
                                <td>{{ $emp->Cidade }}</td>
                                <td>{{ $emp->Uf }}</td>
                                <td>
                                <a style="background-color: greenyellow;" href="{{ route('empresas.verempresa', $emp->id) }}"class="btn btn-sm btn-info"> <i class="material-icons" >search</i></a>
                                    <a href="{{ route('empresas.edit', $emp->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i></a>
                                    
                                    <form method="POST" action="{{ route('empresas.destroy', $emp->id) }}"><br>
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