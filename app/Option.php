<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'text',
        'poll_id'
    ];

    public function poll() {
        return $this-belongsTo('App\Poll');
    }
}
