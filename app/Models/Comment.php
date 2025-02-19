<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'board_id',
        'user_id',
        'content'
    ];

    public function bulletinBoard(){
        return $this->belongsTo(BulletinBoard::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
