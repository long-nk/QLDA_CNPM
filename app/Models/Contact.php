<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    public $timestamps = false;

    const WIDTH_THUMBS = 450;

    protected $fillable = [
        'id',
        'username',
        'email',
        'content',
        'status'
    ];
}
