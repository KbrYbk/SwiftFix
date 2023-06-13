<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Callback;
use App\Models\Services;

class CallbackControler extends Controller
{
    public function callback(Request $request)
    {
        $validatedData = $request->validate([
            'device_model' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Zа-яА-ЯёЁ0-9\s-]+$/u'],
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Zа-яА-ЯёЁ\s-]+$/u'],
            'phone_number' => ['required', 'string', 'max:255', 'regex:/^(?:\+7|8)\s?\d{3}-?\d{3}-?\d{2}-?\d{2}$/'],
        ], [
            'device_model.regex' => 'Неверный формат ввода. <br> Пример правильного ввода: Samsung Galaxy S10',
            'name.regex' => 'Неверный формат ввода. <br>Пример правильного ввода: Иван Иванов',
            'phone_number.regex' => 'Неверный формат ввода. <br> Пожалуйста, введите номер телефона в формате +7 или 8 999-999-99-99.',
        ]);

        $callbackRequest = Callback::create($validatedData);

        return redirect()->back();
    }
}
