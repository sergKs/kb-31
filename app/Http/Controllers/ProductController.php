<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function list()
    {
        return Product::query()
            ->limit(4)
            ->get();
    }

    public function info($id)
    {
        return Product::query()
            ->where(['id' => $id])
            ->firstOrFail();
    }
}
