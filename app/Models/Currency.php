<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currency extends Model
{
    use HasFactory;

    protected $table = 'currencies';

    protected $fillable = [
        'currency_name',
        'currency_code',
        'exchange_rate',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
