<?php

namespace App\Models;

use App\Http\Controllers\BanersController;
use App\Models\admin\sliders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medias extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_name',
        'photo_alt',
        'photo_description',
        'photo_path',
    ];

    public function banners()
    {
        return $this->hasMany(baners::class);
    }
    public function sliders()
    {
        return $this->hasMany(sliders::class);
    }
}
