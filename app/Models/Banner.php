<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'slide';

    public $timestamps = false;

    protected $fillable = [
        'Id',
        'Sd_title',
        'Sd_link',
        'Sd_image',
        'Sd_active',
        'Sd_sort'
    ];
}
