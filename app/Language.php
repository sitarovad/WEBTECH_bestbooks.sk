<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function books() {
        return $this->hasMany('App\Book');
    }
}
