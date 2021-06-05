<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public function products(){
        //hasone hasmany belongsTo belongs ToMany
        return $this->hasMany(product::class);
    }
    

}
