<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Ads;

class Category extends Model
{
    protected $fillable = ['title'];

    public function userConnection() {
        return $this->belongsTo(User::class);
    }

    public function AdsConnection() {
        return $this->hasMany(Ads::class);
    }
}
