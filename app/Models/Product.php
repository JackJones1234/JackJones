<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public const ID_FIELD = 'id';

    use HasFactory;

    public static function getById(int $id)
    {
        return self::where(self::ID_FIELD, $id)->get();
    }

    public static function deleteById(int $id){
        $product = self::getById($id);
        $product->delete();
    }

    // data should be an array of key and value pairs for name, img, price
    public static function editById(int $id, $data){
        $product = self::getById($id);
        $product::where('id', $id)->update(['name' => $data['name'], 'img' => $data['img'], 'price' => $data['price']]);

    }
}
