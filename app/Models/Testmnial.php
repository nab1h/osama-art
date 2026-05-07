<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testmnial extends Model
{
    protected $fillable = [
        'name',
        'message',
        'is_visible'
    ];
}
