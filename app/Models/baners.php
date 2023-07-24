<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baners extends Model
{
    use HasFactory;
    protected $fillable=['name' ,'type', 'image' ,'description'];
    
    public function getImagePathAttribute()
    {
        return $this->image ? asset('uploads/banners/' . $this->image) : asset('uploads/default.jpeg');
    }
    
}
