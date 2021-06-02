<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{

    protected $fillable = [
        'id', 'titulo', 'descricao', 'id_categoria', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $table = 'noticia';

}
