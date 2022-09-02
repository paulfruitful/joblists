<?php

namespace App\Models;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class application extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'coverletter',
        'cv',
        'portfolio',
        'listing_id'
    ];
    public function Listing(){
        return $this->belongsTo(Listing::class,'listing_id');
    }
}
