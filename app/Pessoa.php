<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
  protected $fillable = ['nome','endereco','telefone','idequipe'];   

  public function equipe()
  {
  	return $this->belongsTo('App\Equipe');
  }
}
