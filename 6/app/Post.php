<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//論理削除
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //DBで書き換えたくない値を保護。入力できない項目を指定する。
    protected $guarded = array('id');

    //Validation定義
    public static $rules = array(
        'body' =>   ['required', 'string', 'max:255'],
    );
    
    //論理削除
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
