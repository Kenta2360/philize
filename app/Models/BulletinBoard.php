<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BulletinBoard extends Model
{
    protected $table = 'bulletin_boards';

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'category_id'
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
