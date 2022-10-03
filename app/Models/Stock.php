<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $primaryKey = 'IDStock';
    public $timestamps = false;
    protected $fillable = ['IDStock', 'Address', 'FreeCounts'];
}
