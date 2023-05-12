<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = ['user_id', 'content', 'rating'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
