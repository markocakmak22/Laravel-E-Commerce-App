<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function home()
    {
        $allCategories = $this->categoryService->getAllCategories();
        return view("eshop.index", compact("allCategories"));
    }
}
