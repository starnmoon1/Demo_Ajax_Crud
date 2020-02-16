<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note_type extends Model
{
    protected $table = 'note_type';
    public function note()
    {
        return $this->hasMany('App\note');
    }
}
