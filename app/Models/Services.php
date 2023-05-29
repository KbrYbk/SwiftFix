<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price',];

    public function brandPrices()
    {
        // return $this->belongsToMany(phonebrands::class, 'brand_service_prices')
        //     ->withPivot('price')
        //     ->withTimestamps();
        return $this->hasMany(BrandServicePrice::class, 'services_id');
    }
}
