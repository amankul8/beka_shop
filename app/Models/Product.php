<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'model_id',
        'color_id',
        'name',
        'description',
        'image_url',
        'new',
        'pop',
        'active',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function model(){
        return $this->belongsTo(Model::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
