<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public function language()
    {
        return $this->belongsTo('App\Language','foreign_key');
    }

    public function user()
    {
        return $this->belongsTo('App\User','foreign_key');
    }
}
