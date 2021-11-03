<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $table = 'keyword',

    protected $fillable = [
        'Id',
        'K_name',
        'K_description',
        'K_hot'
    ];
}
