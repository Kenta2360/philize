<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['information_id', 'heading', 'content'];

    public function information(){
        return $this->belongsTo(Information::class);
    }
}
