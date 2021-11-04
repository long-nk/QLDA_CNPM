<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Product extends Model
{
    protected $table = 'product';

    public $timestamps = false;

    const WIDTH_THUMBS = 450;

    protected $fillable = [
        'Pro_name',
        'Pro_content',
        'Pro_price',
        'Pro_category_id',
        'Pro_C_id',
        'Pro_sale',
        'Pro_avatar',
        'Pro_view',
        'Pro_hot',
        'Pro_active',
        'Pro_description',
        'Pro_number_import'
    ];

    public function category(){
        return $this->belongsTo(Categories::class, 'Pro_category_id');
    }

}
