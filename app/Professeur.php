<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $dates=['created_at','updated_at'];

    protected $fillable=[
        'departement_id','grade'
    ];
    public function user(){
        return $this->morphOne('App\User','userable');
    }
    public function departement(){
        return $this->belongsTo(\App\Departement::class);
    }
}
