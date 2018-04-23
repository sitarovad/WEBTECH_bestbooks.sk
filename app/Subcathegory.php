<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcathegory extends Model
{
    public function cathegory() {
        return $this->belongsTo('App\Cathegory');
    }

    public function books() {
        return $this->hasMany('App\Book');
    }
}
