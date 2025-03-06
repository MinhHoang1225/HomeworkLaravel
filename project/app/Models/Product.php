<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    use HasFactory;

    protected $fillable = ['name', 'price', 'image', 'category_id'];
    public function product_type(){
        return $this -> belongsTo('App\ProductType');
    }
}
