<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'email', 'password'];

    protected $hidden = ['password', 'remember_token',];

    public $timestamps = false;

    public function noticias() {
    	return $this->hasMany('App\Noticia');
    }
}
