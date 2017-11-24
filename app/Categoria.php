<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    protected $primaryKey = 'id';

    protected $fillable = ['descripcion'];

    public $timestamps = false;

    public function noticias() {
    	return $this->hasMany('App\Noticia');
    }
}
