<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    protected $table = "photos";
    protected $fillable = [
        'product_id',
        'photo_name',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
