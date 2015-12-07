<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'deadline',
        'progress',
        'category'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
