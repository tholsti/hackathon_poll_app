<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function options() {
        $this->hasMany('App\Option');
    }
}
