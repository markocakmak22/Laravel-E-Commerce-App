<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\CategoryService;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function getProductsByCategory($categoryId)
    {
        $category = $this->categoryService->getCategoryById($categoryId);
        $products = $this->productService->getProductsByCategory($categoryId);
        return view("eshop.category.openedCategory", compact("category", "products"));
    }

    public function getProductById($productId)
    {
        $product = $this->productService->getProductById($productId);
        $productPhoto = $product->photo->first();
        return view("eshop.product.single", compact("product", "productPhoto"));
    }
}
