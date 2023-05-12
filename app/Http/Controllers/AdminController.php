<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonebrands;
use App\Models\Services;
use App\Models\Callback;
use \Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    //____________________________________________________________Вывод информации с базы для админа_________________________________________________________
    public function admin()
    {
        $phone = phonebrands::OrderBy('id', 'desc')->get();
        $services = Services::all();
        $callback = Callback::OrderBy('id', 'desc')->get();
        return view('admin', compact('phone', 'services', 'callback'));
    }
    //____________________________________________________________Удаление информации с базы для админа_________________________________________________________
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
    //____________________________________________________________Добавление информации в базу для админа_________________________________________________________
    //_____________добавление бренда на главную страницу____________________________
    //ссылка на отправку формы добавления бренда
    public function create()
    {
        return view('home');
    }
    //отправка информации которая вводилась в форму
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            'text' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_slogan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        $brand = new phonebrands;
        $brand->name = $request->name;
        $brand->color = $request->color;
        $brand->text = $request->text;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('images'), $imageName);
            $brand->img = $imageName;
        }

        if ($request->hasFile('img_slogan')) {
            $imgSlogan = $request->file('img_slogan');
            $imgSloganName = time() . '_slogan.' . $imgSlogan->getClientOriginalExtension();
            
            // Применяем изменения размера изображения
            $resizedImageSlogan = Image::make($imgSlogan)->resize(800, 600);
            $resizedImageSlogan->save(public_path('images') . '/' . $imgSloganName);
            
            $brand->img_slogan = $imgSloganName;
        }

        $brand->save();

        return redirect()->route('admin')->with('success', 'Бренд успешно добавлен');
    }
    //________________________таблицы_______________________________________________
    //ссылка на отправку формы добавления услуги
    public function createservices()
    {
        return view('addservices');
    }
    //отправка информации которая вводилась в форму
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
