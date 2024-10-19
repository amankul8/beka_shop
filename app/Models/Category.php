<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'parent_id',
    ];

    // Связь для подкатегорий
    public function sub_categories(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Связь для родительской категории
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Связь с продуктами
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
