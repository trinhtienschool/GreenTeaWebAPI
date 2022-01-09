<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable = ['id','avatar','name','owner','updater','slug'];

    protected $with=['_owner','_updater'];

    public function _owner(){
        return $this->hasOne(User::class,'id','owner');

    }
    public function _updater(){
        return $this->hasOne(User::class,'id','updater');

    }

}
