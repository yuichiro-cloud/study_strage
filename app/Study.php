<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }
}
