<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public $timestamps = false;

    protected $fillable = [
        'Id',
        'Pro_name',
        'Pro_content',
        'Pro_category_id',
        'Pro_sale',
        'Pro_avatar',
        'Pro_view',
        'Pro_hot',
        'Pro_active',
        'Pro_description',
        'Pro_number_import'
    ];

    public function category(){
        return $this->belongsTo('App/Models/Categories', 'Pro_category_id');
    }


}
