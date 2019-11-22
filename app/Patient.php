<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function documentations() {
        return $this->hasMany('App\Documentation');
    }
}
