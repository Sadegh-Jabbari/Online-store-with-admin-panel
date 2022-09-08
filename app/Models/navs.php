<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navs extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_nav_url',
        'main_nav_name',
        'hasMegaMenu',
    ];
}
