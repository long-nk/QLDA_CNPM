<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    public $timestamps = false;

    protected $fillable = [
        'Id',
        'A_Name',
        'A_Hot',
        'A_Active',
        'A_View',
        'A_Description',
        'A_Avatar',
        'A_Content'
    ];
}
