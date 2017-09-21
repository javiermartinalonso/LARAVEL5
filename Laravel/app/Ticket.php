<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];

    //definimos la relacion con comments para indicar que es una relacion 1 a n
    //1 ticket muchos comentarios
    public function comments()
    {
    	return $this->hasMany('App\Comment', 'post_id');
    }

}
