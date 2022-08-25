<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    use HasFactory;

    protected $fillable = [
        'slider_uri',
        'slider_name',
        'slider_number',
        'media_id',
    ];
}
