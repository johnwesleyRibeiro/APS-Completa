<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'Nome', 
        'Id_Professor'
    ];

}

