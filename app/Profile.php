<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
        protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'firstname' => 'required',
        'lastname' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    // 以下を追記
    // profileモデルに関連付けを行う
    public function histories()
    {
      return $this->hasMany('App\ProfileHistory');
    }
    
}