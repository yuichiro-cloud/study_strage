<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function studies()
    {
        return $this->belongsToMany('App\Study');
    }

    public function user()
    {
        return $this->belongsTo('App\User','foreign_key');
    }
}
