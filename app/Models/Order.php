<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'total_amount'
    ];

    public function products() {
        return $this
            ->belongsToMany(Product::class, 'order_details', 'order_id', 'product_id')
            ->withPivot('price', 'stock_qty');
    }
}
