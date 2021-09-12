<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    //Nombre de las columnas de la tabla
    protected $fillable =
    [
        'numero',
        'operadora',
        'user_id'
    ];

    //Nombre de la tabla
    protected $table = 'telefonos';

    //Relacion con la tabla de usuarios
    public function user(){
        return $this->belongsTo(User::class);
    }
}
