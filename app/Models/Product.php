<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'model_id',
        'color_id',
        'sizes',
        'collection_id',
        'currency_id',
        'composition',
        'description',
        'image_url',
        'new',
        'pop',
        'active',
        'price',
        'min_quantity',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function model(){
        return $this->belongsTo(ModelEntry::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }

    public function collection(){
        return $this->belongsTo(Collection::class);
    }
    public function currency(){
        return $this->belongsTo(Currency::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
