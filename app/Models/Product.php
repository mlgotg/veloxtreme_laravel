<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class)->withPivot('count');
    }
    public function users(){
        return $this->belongsToMany(User::class)->withPivot('count');
    }
}
