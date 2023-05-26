<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonebrands;
use App\Models\review;

class PhoneBrand extends Controller
{

    public function main()
    {
        $brand = phonebrands::OrderBy('id', 'desc')->get();  // Вывод брендов
        $reviews = Review::OrderBy('id','desc')->get();      // Вывод отзывов
        return view('main', compact('brand', 'reviews'));
    }
}
