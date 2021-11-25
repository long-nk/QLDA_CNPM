<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public $timestamps = false;

    const WIDTH_THUMBS = 450;

    protected $fillable = [
        'id',
        'Od_transaction_id',
        'Od_Product_id',
        'Od_Sale',
        'Od_qty',
        'Od_status'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }

    public function transaction()
    {
        return $this->belongsToMany('App\Models\Transaction');
    }



}
