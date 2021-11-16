<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = [
        'Id',
        'Cmt_name',
        'Cmt_content',
        'Cmt_product_id',
        'Cmt_user_id',
        'Cmt_disk_like'
    ];

    public function User(){
        return $this->belongsTo('App/Models/User');
    }

}
