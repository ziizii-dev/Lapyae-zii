<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodytype extends Model
{
    use HasFactory;
 protected $fillable=[
    'name',
    'car_id',
    'brand_id'
 ];
}
