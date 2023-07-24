<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    use HasFactory;
    protected $fillable =['image','link_youtube', 'desc', 'description','category_id','name','main_image'];


    protected $casts=[
        'image'=>'array',
        'link_youtube'=>'array',
        'desc'=>'array',
        'name'=>'array',
    ];
    protected $guarded = ['id'];

    public function getImagePathAttribute()
    {
        return $this->main_image ? asset('uploads/works/' . $this->main_image) : asset('uploads/default.jpeg');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

}
