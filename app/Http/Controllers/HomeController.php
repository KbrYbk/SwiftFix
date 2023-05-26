<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use \Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }


    public function index()
    {
        $user = Auth::user();

        return view('home', compact('user'));
    }

    public function uploadAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();

            // Создаем экземпляр Intervention Image
            $image = Image::make($avatar);

            // Устанавливаем максимальное значение размера в байтах (2 МБ = 2097152 байта)
            $maxSizeInBytes = 2097152;

            // Проверяем размер изображения и сжимаем его, если необходимо
            if ($image->filesize() > $maxSizeInBytes) {
                $image->resize(1080, 1080, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Сохраняем сжатое изображение
                $image->save(public_path('avatars/' . $avatarName), 75);
            } else {
                // Сохраняем оригинальное изображение
                $avatar->move(public_path('avatars'), $avatarName);
            }

            $user->avatar = $avatarName;
            $user->save();
        }

        return redirect()->back();
    }
}
