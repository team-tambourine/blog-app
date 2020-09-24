<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //ユーザーとリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
