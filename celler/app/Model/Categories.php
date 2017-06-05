<?php

namespace App\Model;

use App\Base\BaseModel;

class Categories extends BaseModel
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function bottleCategories()
    {
        return $this->hasMany('App\BottleCategories');
    }

    public function bottles()
    {
        return $this->belongsToMany('App\Bottles');
    }
}
