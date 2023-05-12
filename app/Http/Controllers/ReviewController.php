<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных отзыва
        $validatedData = $request->validate([
            'content' => 'required|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Создание нового отзыва для текущего пользователя
        $review = new Review;
        $review->content = $validatedData['content'];
        $review->rating = $validatedData['rating'];
        $review->user_id = Auth::id();
        $review->save();

        return redirect()->back()->with('success', 'Отзыв успешно добавлен');
    }

    
}