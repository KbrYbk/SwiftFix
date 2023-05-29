<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandServicePrice extends Model
{
    use HasFactory;
    protected $table = 'brand_service_prices';
    protected $fillable = ['phonebrands_id', 'services_id', 'price'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
