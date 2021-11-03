<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'Id',
        'Od_transaction_id',
        'Od_product_id',
        'Od_sale',
        'Od_qty',
        'Od_price'
    ];
}
