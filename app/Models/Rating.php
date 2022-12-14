<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        
    ];
    public $timestamps = false; //set time to false
    public function user(){
        return $this->belongsTo(User::class);
    }
}
