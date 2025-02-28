<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
