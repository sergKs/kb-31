<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function list()
    {
        return Category::query()
            ->where(['active' => true])
            ->get();
    }
}
