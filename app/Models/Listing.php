<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
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
}
