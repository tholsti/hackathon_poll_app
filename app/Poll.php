<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
        'name',
        'description',
        'code',
        'user_id'
    ];

    public function options() {
        $this->hasMany('App\Option');
    }

    public function user() {
        $this->belongsTo('App\User');
    }
}
