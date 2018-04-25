<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryData extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'mobile',
        'street',
        'postal_code',
        'city'];
}
