<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

//    protected $table = 'laravelapp_db';

    protected  $fillable = [
        'id',
        'product_name',
        'price',
        'user_id',
        'manager_id',
        'description',
        'image',
        'status'

    ];
}
