<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','avatar','price','cate_id','owner','updater'];

    protected $with=['_owner','_updater','cate'];
    public function cate(){
        return $this->hasOne(Category::class,'id','cate_id');
    }
    public function _owner(){
        return $this->hasOne(User::class,'id','owner');

    }
    public function _updater(){
        return $this->hasOne(User::class,'id','updater');

    }
}
