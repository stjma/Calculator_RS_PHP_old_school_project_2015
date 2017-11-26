<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xp extends Model
{
    public function XpTable()
    {
        return $this->belongsTo('App\XptTable');
    }
}
