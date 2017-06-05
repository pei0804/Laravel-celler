<?php

namespace App\Model;

use App\Base\BaseModel;

class Bottles extends BaseModel
{
    protected $table = 'bottles';
    protected $fillable = ['name', 'quantity'];

    public function bottleCategories()
    {
        return $this->hasMany('App\BottleCategories');
    }

    public function account()
    {
        return $this->belongsTo('App\Accounts');
    }

    // 多対多のリレーション
    public function categories()
    {
        return $this->belongsToMany('App\Categories');
    }
}
