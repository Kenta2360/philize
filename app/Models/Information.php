<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $table = 'informations';
    protected $fillable = ['title', 'intro', 'category_id', 'region_id', 'user_id'];

    public function sections(){
        return $this->hasMany(Section::class);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
