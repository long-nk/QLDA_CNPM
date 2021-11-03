<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'Id',
        'Name',
        'Email',
        'Password',
        'Avatar',
        'Log_login'
    ];
}
