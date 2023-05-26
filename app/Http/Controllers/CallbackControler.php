<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Callback;

class CallbackControler extends Controller
{
    public function callback(Request $request)
    {
        $validatedData = $request->validate([
            'device_model' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255', 'regex:/^[0-9+\s()-]+$/'],
        ]);

        $callbackRequest = Callback::create($validatedData);

        // Дополнительные действия, если необходимо
        return redirect()->back();
    }
}
