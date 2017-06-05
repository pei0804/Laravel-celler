<?php

namespace App\Model;

use App\Base\BaseModel;

class BottleCategories extends BaseModel
{
    protected $table = 'bottle_categories';
    protected $fillable = ['category_id', 'bottle_id'];

    public function bottle()
    {
        return $this->belongsTo('App\Bottles');
    }

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }
}
