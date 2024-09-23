<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
    protected $category;
    protected $product;

    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function getProductsByCategory(int $categoryId): Collection
    {
        $category = $this->category->findOrFail($categoryId);
        return $category->products;
    }

    public function getProductById(int $productId): Product
    {
        return $this->product->with(['photo', 'category'])->findOrFail($productId);
    }
}
