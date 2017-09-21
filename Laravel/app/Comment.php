<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function ticket()
    {
	//Con belongsTo realizamos la relacion oneToMany
        return $this->belongsTo('App\Ticket');
    }
}


