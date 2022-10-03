<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Ads extends Model
{
    protected $fillable = ['title', 'description', 'category', 'img_url'];

    public function userConnection() {
        return $this->belongsTo(User::class);
    }
}
