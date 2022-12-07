<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = 'products';
    // protected $primaryKey = 'flight_id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    public function product_code(){
        return $this->hasOne(ProductCode::class);
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function orders(){
        return $this->bolongsToMany(Order::class,'order_details','product_id','order_id');
    }
}
