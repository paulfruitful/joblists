<?php

namespace App\Models;

use App\Models\User;
use App\Models\application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'description',
        'tags',
        'location',
        'website',
        'email',
        'photo',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function application(){
        return $this->hasMany(application::class,'listing_id');
    }
}
