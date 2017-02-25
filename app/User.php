<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $morphClass='User';

    protected $dates=['created_at', 'updated_at'];

    protected $fillable = [
        'nom','prenom','email','phone','userable_id', 'userable_type', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function annonces(){
        return $this->hasMany(\App\Annonce::class);
    }

    public function userable(){
        return $this->morphTo();
    }

    public function comments(){
        return $this->hasMany('App\Annonce');
    }

    public function files()
    {
        return $this ->hasMany('App\File');
    }

    public function historics ()
    {
        return $this ->hasMany('App\Mark');
    }



}
