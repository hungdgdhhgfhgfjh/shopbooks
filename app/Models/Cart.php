<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table    = 'carts';
    protected $fillable = ['id','product_id','code','quantity','price'];
    public $timestamps  = false;
}
