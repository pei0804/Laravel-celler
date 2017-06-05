<?php

namespace App\Model;

use App\Base\BaseModel;

class Accounts extends BaseModel
{
    /**
     * モデルと関連しているテーブル
     * @var string
     */
    protected $table = 'accounts';

    /**
     * 複数代入する属性
     * @var array
     */
    protected $fillable = ['name', 'email'];

    /**
     *表示したくないフィールド
     * @var array
     */
//    protected $hidden = [
//        'password'
//    ];

    /**
     * accountsに紐づくbottlesを取得する
     */
    public function bottles()
    {
        return $this->hasMany('App\Bottles');
    }
}
