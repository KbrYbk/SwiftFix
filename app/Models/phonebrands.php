<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phonebrands extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'img', 'img_slogan', 'color', 'text'];
}
