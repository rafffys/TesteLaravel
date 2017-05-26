<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pessoa;

class Equipe extends Model
{
    protected $fillable =['nome','email'];

    public function pessoas()
    {
    	return $this->hasMany('App\Pessoa');
    }
}
