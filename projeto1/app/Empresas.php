<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'Nome',
        'Nome_Fantasia',
        'Razao_Social',
        'Telefone',
        'Email',
        'Cidade',
        'Uf'
    ];

}

