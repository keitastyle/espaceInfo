<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Annonce extends Model
{
    use Notifiable;
    protected $dates =[
        'created_at', 'updated_at',
    ];
    protected $fillable = ['titre','contenu','author_id'];

    public function user(){
       return $this->belongsTo(\App\User::class);
    }
}
