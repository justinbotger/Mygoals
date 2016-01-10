<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'update_id',
        'user_id',
        'reply_to',
        'progress_update_id'
    ];

    public function progressUpdate() {
        return $this->hasOne('App\ProgressUpdate', 'id', 'progress_update_id');
    }

    public function user() {
        return $this->belongsTo('App\user');
    }
}
