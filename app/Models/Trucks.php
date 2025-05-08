<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trucks extends Model
{
    protected $fillable = ['make','model', 'year', 'price'];
}
