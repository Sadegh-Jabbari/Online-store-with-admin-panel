<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baners extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_uri',
        'banner_name',
        'media_id',
    ];
}
