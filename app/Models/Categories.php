<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'Id',
        'C_name',
        'C_active',
        'C_hot',
        'C_sort'

    ];

    public function product(){
        return $this->hasMany('App/Product');
    }
}
