<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    public $timestamps = false;

    const WIDTH_THUMBS = 450;

    protected $fillable = [
        'id',
        'Tst_user_id',
        'Tst_total_money',
        'Tst_name',
        'Tst_address',
        'Tst_payment',
        'Tst_email',
        'Tst_phone',
        'Tst_note',
        'Tst_status',
        'Tst_reason'
    ];

    public function order(){
        return $this->belongsTo('App\Models\Order');
    }

}
