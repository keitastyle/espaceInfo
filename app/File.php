<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable =['author_id','classe_id','nom','type','path','description',];
}
