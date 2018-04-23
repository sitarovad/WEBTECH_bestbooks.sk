<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cathegory extends Model
{
    //
    public function subcathegories() {
        return $this->hasMany('App\Subcathegory');
    }
}
