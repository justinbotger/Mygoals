<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id',
        'reciever_id',
        'subject',
        'boby'
    ];

    public function user() {
        return $this->belongsTo('App\user');
    }
}
