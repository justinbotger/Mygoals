<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encouragement extends Model
{
    protected $fillable = [
        'user_id',
        'progress_update_id'
    ];

    public function progressUpdate() {
        return $this->hasOne('App\ProgressUpdate', 'id', 'progress_update_id');
    }

    public function user() {
        return $this->belongsTo('App\user');
    }
}
