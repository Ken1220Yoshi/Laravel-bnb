<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenityPost extends Model
{
    use HasFactory;

    protected $table = "amenity_post";

    protected $guarded = [];

    public $timestamps = false;

    public function amenity(){
        return $this->belongsTo(Amenity::class);
    }
}
