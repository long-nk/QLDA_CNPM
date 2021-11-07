<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';

    protected $fillable = [
        'Id',
        'Sd_image',
        'Sd_active',
        'Sd_sort'
    ];
}
