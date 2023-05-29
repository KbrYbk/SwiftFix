<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phonebrands;
use App\Models\Services;
use App\Models\Callback;
use App\Models\BrandServicePrice;

class BrandController extends Controller
{
    public function output($id)
    {
        // Получить бренд по идентификатору
        $brand = phonebrands::findOrFail($id);
        // Получить цены для данного бренда
        $brandPrices = $brand->servicePrices;
        return view('brandpage', compact('brand', 'brandPrices'));
    }

    public function edit($id)
    {
        $brand = phonebrands::findOrFail($id);
        $services = Services::all();
        $brandServicePrices = BrandServicePrice::where('phonebrands_id', $id)->get();

        return view('edit', compact('brand', 'services', 'brandServicePrices'));
    }

    public function update(Request $request, $id)
    {
        $brand = phonebrands::findOrFail($id);

        if ($request->has('name')) {
            $brand->name = $request->name;
        }

        if ($request->has('color')) {
            $brand->color = $request->color;
        }

        if ($request->has('text')) {
            $brand->text = $request->text;
        }

        // Обновление изображения бренда, если предоставлено новое изображение
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('images'), $imageName);
            $brand->img = $imageName;
        }

        // Обновление изображения телефона на отдельной странице бренда, если предоставлено новое изображение
        if ($request->hasFile('img_slogan')) {
            $imgSlogan = $request->file('img_slogan');
            $imgSloganName = time() . '_slogan.' . $imgSlogan->getClientOriginalExtension();
            $imgSlogan->move(public_path('images'), $imgSloganName);
            $brand->img_slogan = $imgSloganName;
        }

        // Обновление цен в таблице brandServicePrice
        $prices = $request->input('prices');

        foreach ($prices as $serviceId => $price) {
            $brandServicePrice = BrandServicePrice::where('phonebrands_id', $brand->id)
                ->where('services_id', $serviceId)
                ->first();

            if ($brandServicePrice) {
                $brandServicePrice->price = $price;
                $brandServicePrice->save();
            } else {
                // Создание новой записи, если цена для данной услуги отсутствует
                $brandServicePrice = new BrandServicePrice();
                $brandServicePrice->phonebrands_id = $brand->id;
                $brandServicePrice->services_id = $serviceId;

                // Получить цену из таблицы services, если не было изменений
                $originalPrice = Services::find($serviceId)->price;

                if ($originalPrice !== null) {
                    // Если цена была изменена, то использовать новую цену, иначе использовать оригинальную цену
                    $brandServicePrice->price = $price !== $originalPrice ? $price : $originalPrice;
                } else {
                    // Если цена отсутствует в таблице services, использовать новую цену
                    $brandServicePrice->price = $price;
                }

                $brandServicePrice->save();
            }
        }

        $brand->save();

        return redirect()->route('admin')->with('success', 'Бренд успешно обновлен');
    }
}
