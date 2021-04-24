<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Информация о корзине.
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function info()
    {
        return Cart::query()->firstOrFail();
    }

    public function add(Request $request)
    {
        $cart = Cart::query()->firstOrFail();
        $productId = $request->get('productId');
        $count = $request->get('count', 1);

        CartItem::create([
            'cartId' => $cart->id,
            'productId' => $productId,
            'count' => $count
        ]);

        $cart->calculate();

        return $cart;
    }
}
