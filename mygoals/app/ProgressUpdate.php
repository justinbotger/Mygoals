<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressUpdate extends Model
{
    protected $fillable = [
        'goal_id',
        'title',
        'body',
        'added_progress'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function goal() {
        return $this->hasOne('App\Goal', 'id', 'goal_id');
    }

    public function comment() {
        return $this->hasMany('App\comment');
    }

    public function encouragement() {
        return $this->hasMany('App\Encouragement');
    }
}
