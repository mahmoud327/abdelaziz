<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description'];
    
    public function getImagePathAttribute()
    {
        return $this->image ? asset('uploads/photos/' . $this->image) : asset('uploads/default.jpeg');
    }
    
}
