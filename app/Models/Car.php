<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'name',
        'brand_id',
        'country_id',
        'price_id',
        'mileageFrom_id',
        'mileageTo_id'
    ];
}
