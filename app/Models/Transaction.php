<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = [
        'Id',
        'Tsl_user_id',
        'Tsl_total_money',
        'Tsl_name',
        'Tsl_email',
        'Tsl_phone',
        'Tsl_admin_id',
        'Tsl_note',
        'Tsl_status'
    ];
}
