<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function getCart(string $id) {
        $model = new Cart();
        $products = $model->where('cart_id', $id)->get();
        $ids = [];
        foreach($products as $product) {
            $ids[] = ['id' => $product->product_id, 'quantity' => $product->quantity];
        }
        $products = [];

        foreach($ids as $id) {
            $products[] = ['product' => Product::where('id', $id['id'])->first(), 'quantity' => $id['quantity']];
        }

        return $products;
    }
}
