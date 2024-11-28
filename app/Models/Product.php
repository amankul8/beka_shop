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

    public function colors(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Color::class, 'products_colors');
    }

    public function collections(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Collection::class, 'products_collections');
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
