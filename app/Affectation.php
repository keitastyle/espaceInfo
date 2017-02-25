<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    protected $fillable=['professeur_id','classe_id','module_id','cours_id','heures','coefficient'];
}
