<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table = 'mensajes';

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User','id_prof');
    }
}
