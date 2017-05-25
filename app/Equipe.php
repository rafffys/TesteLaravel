<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable =['nome','email'];

    public function pessoas()
    {
    	return $this->hasMany('App\Pessoa');
    }
}
