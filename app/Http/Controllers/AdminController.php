<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonebrands;
use App\Models\Services;
use App\Models\Callback;

class AdminController extends Controller
{
    public function admin()
    {
        $phone = phonebrands::OrderBy('id','desc')->get();
        $services = Services::all();
        $callback = Callback::OrderBy('id','desc')->get();
        return view('admin', compact('phone', 'services', 'callback'));
    }

    //удаление бренда телефона с главной страницы
    public function delete_phonebrands($id)
    {
        phonebrands::where('id', $id)->delete();
        return redirect(route('admin'));
    }

    //удаление заявки обратного звонка
    public function delete_callback($id)
    {
        Callback::where('id', $id)->delete();
        return redirect(route('admin'));
    }

    //удаление услуги из таблицы услуг
    public function delete_services($id)
    {
        Services::where('id', $id)->delete();
        return redirect(route('admin'));
    }

    //добавление бренда на главную страницу
    public function create()
    {
        return view('addbrand');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brand = new phonebrands;
        $brand->name = $request->name;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('images'), $imageName);
            $brand->img = $imageName;
        }

        $brand->save();

        return redirect()->route('admin')->with('success', 'Бренд успешно добавлен');
    }
    //таблицы
    public function services()
    {
        $services = Services::all();
        return view('services', compact('services'));
    }

    public function createservices()
    {
        return view('addservices');
    }

    public function storeservices(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $service = new Services;
        $service->name = $request->name;
        $service->price = $request->price;

        $service->save();

        return redirect()->route('admin')->with('success', 'Бренд успешно добавлен');
    }
}
