<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
    protected $fillable = [
        'Nome',
        'Ra',
        'Periodo',
        'Telefone',
        'Email',
        'Id_Curso'
    ];

}

