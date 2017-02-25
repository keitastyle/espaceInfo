<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Departement extends Model
{
    use Notifiable;
    //protected $dates=['created_at','updated_at'];
    protected $fillable=['nom'];
    public $timestamps=false;

    public function professeurs(){
        return $this->hasMany(\App\Professeur::class);
    }
}
