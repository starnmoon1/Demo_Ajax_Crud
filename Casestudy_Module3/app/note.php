<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $table = 'notes';

    public function noteType()
    {
        return $this->belongsTo('App\note_type');
    }
}
