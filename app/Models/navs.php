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
        'cat_nav_title',
        'cat_nav_url',
        'hasChild',
        'father_id',
        'sub_nav_title',
        'sub_nav_url',
        'main_branch',
//        'nav_url',
//        'nav_name',
//        'nav_title',
//        'nav_uri',
//        'hasChild',
//        'father_id',
    ];
}{
}{
}
