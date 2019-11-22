<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table='professores';
    protected $fillable = [
        'Nome',
        'Telefone',
        'Email'
    ];

}

