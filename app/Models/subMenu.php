<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_nav_title',
        'sub_nav_url',
        'main_branch',
        'father_id',
    ];
}
