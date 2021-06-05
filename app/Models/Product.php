<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name', 
        'product_desc', 
        'image',
        'price',
        

    ];
    protected $attributes = [
        'image' => '',
    ];
    public function category(){
        //hasone hasmany belongsTo belongs ToMany
        return $this->belongsTo(category::class);
    }
    
}
