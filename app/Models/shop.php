<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['id', 'image', 'Name', 'Price', 'Count', 'product_id'];
}
