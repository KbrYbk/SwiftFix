<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonebrands;
use App\Models\Services;
use App\Models\Callback;

class BrandController extends Controller
{
    public function output($id)
    {
        $phone = phonebrands::where('id', $id)->get();
        $services = Services::all();
        return view('brandpage', compact('phone','services'));
    }


}
