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
}
