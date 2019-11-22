<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Estagio extends Model
{
    protected $fillable = [
        'Periodo',
        'Area_atua',
        'Data_Inicio',
        'Data_Termino',
        'Id_Coordenador',
        'Id_Estagiario',
        'Id_Empresa'
    ];

}

