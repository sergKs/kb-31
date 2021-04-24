<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'price',
        'image'
    ];

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'image' => URL::to('/') . '/' . $this->image
        ];
    }
}
