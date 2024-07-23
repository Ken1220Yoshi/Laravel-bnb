<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    public function amenityPost(){
        return $this->hasMany(AmenityPost::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->hasMany(Image::class);
    }

    
}
