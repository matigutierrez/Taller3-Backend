<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia';

    protected $primaryKey = 'id';

    protected $fillable = ['titular', 'entrada', 'cuerpo', 'imagen', 'fecha', 'usuario_id', 'categoria_id'];

    public $timestamps = false;

    public function usuario() {
    	return $this->belongsTo('App\Usuario');
    }

    public function categoria() {
    	return $this->belongsTo('App\Categoria');
    }
}
