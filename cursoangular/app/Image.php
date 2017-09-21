<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //Indicamos que columnas de la tabla pueden ser modificadas
    protected $fillable = [
        'title', 'description', 'thumbnail', 'imageLink', 'user_id'
    ];
}
