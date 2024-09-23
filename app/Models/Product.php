<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = "product";
    protected $fillable = [
        'category_id',
        'product_name',
        'brand',
        'product_price',
        'product_short_description',
        'product_big_description',
        'thumbnail'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function photo(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
}
