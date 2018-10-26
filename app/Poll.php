<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
        'name',
        'description',
        'code'
    ];

    public function options() {
        $this->hasMany('App\Option');
    }
}
