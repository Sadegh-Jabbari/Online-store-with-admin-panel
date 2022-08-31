<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriesMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_nav_title',
        'cat_nav_url',
        'hasChild',
        'father_id',
    ];
}
