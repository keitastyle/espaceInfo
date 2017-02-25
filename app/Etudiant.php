<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Etudiant extends Model
{
    protected $dates=['date_naissance','date_debut','created_at','updated_at'];
    protected $fillable=[
        'classe_id','date_debut','date_naissance',
    ];

    public function setDateDebutAttribute($value){
        $this->attributes['date_debut'] = Carbon::createFromFormat('Y-m-d',$value);
    }
    public function setDateNaissanceAttribute($value){
        $this->attributes['date_naissance']=Carbon::createFromFormat('Y-m-d',$value);
    }

    public function user(){
        return $this->morphOne('App\User','userable');
    }
  /*  /// replace the point from the european date format with a dash in your controller
$date = str_replace('.', '-', $request->input('delivery_date'));
// create the mysql date format
$carbon->createFromFormat('d-m-Y', $date)->toDateString();*/
}
