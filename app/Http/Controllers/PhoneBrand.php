<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonebrands;

class PhoneBrand extends Controller
{
    public function main(){
        $brands = phonebrands::OrderBy('id', 'desc')->get();
        return view('main', ['brand'=>$brands]);
    }
}
