<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XpTb extends Model
{
    public function Xps()
    {
        return $this->hasMany('App\Xp');
    }

    public function Skills()
    {
        return $this->hasMany('App\Skill');
    }
}
