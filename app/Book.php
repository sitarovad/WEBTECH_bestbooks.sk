<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'content',
        'publisher',
        'price',
        'publish_year',
        'pages_number',
        'size',
        'binding',
        'code',
        'quantity',
        'rating'];

    public function subcathegory() {
        return $this->belongsTo('App\Subcathegory');
    }

    public function language() {
        return $this->belongsTo('App\Language');
    }

    public function availability() {
        return $this->belongsTo('App\Availability');
    }
}
