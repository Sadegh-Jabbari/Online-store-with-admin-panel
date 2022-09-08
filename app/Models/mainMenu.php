<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'mainMenu_title'
    ];
}
