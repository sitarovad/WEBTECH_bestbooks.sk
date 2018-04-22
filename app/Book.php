<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
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
}
