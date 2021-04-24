<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'carts_items';

    protected $fillable = [
        'cartId',
        'productId',
        'count'
    ];
}
